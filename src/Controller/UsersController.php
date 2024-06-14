<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Datasource\FactoryLocator;
use Cake\Mailer\Mailer;


class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['login', 'index', 'forgotPassword', 'resetPassword', 'register', 'lookinProfesional', 'view']);
    }
    public function register()
    {
        $this->viewBuilder()->setLayout('register');
        $regions = $this->Users->Regions->find('list', ['limit' => 200])->all();
        $comunas = $this->Users->Comunas->find('list', ['limit' => 200])->all();
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $provincias = $this->Users->Provincias->find('list', ['limit' => 200])->all();
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {
            $user->role_id = 1;
            $user->is_profesional = 0;
            $postData = $this->request->getData();
            $user = $this->Users->patchEntity($user, $postData);
            $password = $this->request->getData('password');
            $passwordConfirm = $this->request->getData('confirm_password');

            if ($password == $passwordConfirm) {
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('El usuario ha sido guardado.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('El usuario no pudo ser guardado. Por favor, intente nuevamente.'));
                }
            } else {
                $this->Flash->error(__('Las contraseñas no coinciden, intente nuevamente.'));
            }
        }

        $this->set(compact('user', 'regions', 'comunas', 'roles', 'provincias'));
    }
    public function index()
    {

        $this->paginate = [
            'contain' => ['Regions', 'Comunas', 'Roles', 'Provincias'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }
    public function login()
    {
        $this->viewBuilder()->setLayout('login');
        $this->request->allowMethod(['get', 'post']);

        if ($this->request->is('post')) {
            $result = $this->Authentication->getResult();
            if ($result->isValid()) {
                $user = $this->Authentication->getIdentity();
                if ($user->is_profesional == 0) {
                    $redirect = $this->request->getQuery('redirect', [
                        'controller' => 'Users',
                        'action' => 'index',
                    ]);
                } else {
                    $redirect = $this->request->getQuery('redirect', [
                        'controller' => 'Users',
                        'action' => 'index',
                        'prefix' => 'Admin'
                    ]);
                }
                return $this->redirect($redirect);
            } else {
                $this->Flash->error(__('Correo o Contraseña Incorrectos, Intente nuevamente'));
            }
        }
    }


    public function logout()
    {
        $this->viewBuilder()->setLayout('register');

        $result = $this->Authentication->getResult();
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
        }
    }

    public function lookinProfesional()
    {

        $especialidades = $this->Users->Profesional->Especialidad->find('list', ['limit' => 3]);
        $regions = $this->Users->Regions->find('list');


        $usersQuery = $this->Users->find('all', [
            'contain' => [
                'Regions',
                'Comunas',
                'Roles',
                'Profesional' => ['Especialidad']
            ],
            'conditions' => ['Users.is_profesional' => 1]
        ]);
    
        $especialidadId = $this->request->getQuery('especialidad_id');
        if (!empty($especialidadId)) {
            $usersQuery->innerJoinWith('Profesional')
                ->where(['Profesional.especialidad_id' => $especialidadId]);
        }
    
        $regionId = $this->request->getQuery('region_id');
        if (!empty($regionId)) {
            $usersQuery->where(['Users.region_id' => $regionId]);
        }
    
        $users = $this->paginate($usersQuery);
        $this->set(compact('regions', 'users', 'especialidades'));
    }


    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [
                'Regions',
                'Comunas',
                'Roles',
                'Provincias',
                'Califications',
                'Citas',
                'ServiceHistory',
                'Token',
                'Profesional' => ['Especialidad']
            ],
        ]);
        $this->set(compact('user'));
    }

    public function edit()
    {
        $this->viewBuilder()->setLayout('register');
        $userId = $this->Authentication->getIdentity()->getIdentifier();
        $user = $this->Users->get($userId);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Perfil actualizado correctamente.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo actualizar el perfil. Por favor, intente nuevamente.'));
        }

        $regions = $this->Users->Regions->find('list', ['limit' => 200])->all();
        $comunas = $this->Users->Comunas->find('list', ['limit' => 200])->all();
        $roles = $this->Users->Roles->find('list', ['limit' => 200])->all();
        $provincias = $this->Users->Provincias->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'regions', 'comunas', 'roles', 'provincias'));
    }

    public function forgotPassword()
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $email = $this->request->getData('email');
            $user = $this->Users->findByEmail($email)->first();

            if ($user) {
                $token = bin2hex(random_bytes(32)); // Genera un token seguro
                $expiration = new \DateTime('+1 hour'); // El token caduca en 1 hora

                $tokenTable = FactoryLocator::get('Table')->get('Token');
                $ifToken = $tokenTable->find()
                    ->where([
                        'user_id' => $user->id,
                        'expiration >=' => new \DateTime(),
                    ])
                    ->first();

                if ($ifToken) {
                    $ifToken->token = $token;
                    $ifToken->expiration = $expiration->format('Y-m-d H:i:s');
                } else {
                    $ifToken = $tokenTable->newEntity([
                        'user_id' => $user->id,
                        'token' => $token,
                        'expiration' => $expiration->format('Y-m-d H:i:s')
                    ]);
                }

                if ($tokenTable->save($ifToken)) {
                    $this->redirect(['action' => 'resetPassword']);

                    $mailer = new Mailer();
                    $mailer
                        ->setEmailFormat('html')
                        ->setTo($user->email)
                        ->setFrom('soporteoxus96@gmail.com', 'Mi aplicación de correo')
                        ->setSubject('Restablecer contraseña')
                        ->setTransport('gmail')
                        ->deliver('El token para reestablecer tu contraseña es:' . '' . $token);

                    $this->Flash->success('Se ha enviado un enlace de restablecimiento de contraseña a tu correo electrónico.');
                } else {
                    $this->Flash->error('No se pudo generar el enlace de restablecimiento de contraseña. Inténtalo de nuevo.');
                }
            } else {
                $this->Flash->error('No se encontró ningún usuario con ese correo electrónico.');
            }
        }
    }

    public function resetPassword($token = null)
    {
        $this->viewBuilder()->setLayout('login');

        $tokenTable = FactoryLocator::get('Table')->get('Token');
        $tokenData = $tokenTable->find()
            ->first();

        if (!$tokenData) {
            $this->Flash->error('El token ingresado no es válido o ha caducado.');
            return $this->redirect(['action' => 'login']);
        }

        $user = $this->Users->get($tokenData->user_id);

        if ($this->request->is(['post', 'put'])) {
            $newPassword = $this->request->getData('new_password');
            $confirmPassword = $this->request->getData('confirm_password');

            if ($newPassword === $confirmPassword) {
                $user->password = $newPassword;
                if ($this->Users->save($user)) {
                    // Eliminar el token después de su uso
                    $tokenTable->delete($tokenData);

                    $this->Flash->success('La contraseña ha sido actualizada con éxito.');
                    return $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error('No se pudo actualizar la contraseña. Inténtalo de nuevo.');
                }
            } else {
                $this->Flash->error('Las contraseñas no coinciden. Inténtelo nuevamente.');
            }
        }

        $this->set(compact('token'));
    }



    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $user = $this->Users->get($id);
    //     if ($this->Users->delete($user)) {
    //         $this->Flash->success(__('The user has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
