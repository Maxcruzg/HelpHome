<?php

declare(strict_types=1);

namespace App\Controller;

use DateTime;


/**
 * Profesional Controller
 *
 * @property \App\Model\Table\ProfesionalTable $Profesional
 * @method \App\Model\Entity\Profesional[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfesionalController extends AppController
{


    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Upload');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Especialidad'],
        ];
        $profesional = $this->paginate($this->Profesional);

        $this->set(compact('profesional'));
    }


    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('ProfesionalView');
        $profesional = $this->Profesional->get($id, [
            'contain' => ['Users' => ['Regions', 'Comunas'], 'Especialidad', 'Citas', 'HistorialCitas'],
        ]);
    
        // Obtener la calificación promedio del profesional
        $averageRating = $this->Profesional->getAverageRating($id);


        $getCountCitas = $this->Profesional->getCountCitas($id);

        // Pasar el profesional y la calificación promedio a la vista
        $this->set(compact('profesional', 'averageRating' ,'getCountCitas'));
    }



    public function add()
    {

        $userModel = $this->fetchModel('Users');
        $this->viewBuilder()->setLayout('register');
        $especialidad = $this->Profesional->Especialidad->find('list', ['limit' => 200])->all();
        $profesional = $this->Profesional->newEmptyEntity();
        $profesional_id = $this->request->getAttribute('identity');

        if ($profesional_id->is_profesional == 0) {


            if ($this->request->is('post')) {
                $data = $this->request->getData();
                $image = $this->request->getUploadedFile('path');

                $imagePath = $this->Upload->uploadImage($image, 'img/image/');

                if ($imagePath) {
                    $data['path'] = $imagePath;
                    $data['user_id'] = $profesional_id->id;
                    $profesional = $this->Profesional->patchEntity($profesional, $data);
                    if ($this->Profesional->save($profesional)) {

                        $user = $userModel->get($profesional_id->id);
                        $user->is_profesional = 1;
                        $userModel->save($user);

                        $this->Flash->success(__('El profesional fue registrado con éxito.'));
                        return $this->redirect(['prefix' => 'Admin', 'controller' => 'users', 'action' => 'index']);
                    } else {
                        $this->Flash->error(__('No se pudo guardar el profesional. Por favor, intenta de nuevo.'));
                    }
                } else {

                    $this->Flash->error(__('La imagen subida no es válida.'));
                    return $this->redirect(['action' => 'add']);
                }
            }
        } else {
            $this->Flash->error('Ya estas registrado como profesional');
            return $this->redirect(['prefix' => 'Admin', 'controller' => 'users', 'action' => 'index']);
        }


        $this->set(compact('profesional', 'especialidad'));
    }



    public function edit($id = null)
    {
        $profesional = $this->Profesional->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profesional = $this->Profesional->patchEntity($profesional, $this->request->getData());
            if ($this->Profesional->save($profesional)) {
                $this->Flash->success(__('The profesional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profesional could not be saved. Please, try again.'));
        }
        $users = $this->Profesional->Users->find('list', ['limit' => 200])->all();
        $especialidad = $this->Profesional->Especialidad->find('list', ['limit' => 200])->all();
        $this->set(compact('profesional', 'users', 'especialidad'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profesional = $this->Profesional->get($id);
        if ($this->Profesional->delete($profesional)) {
            $this->Flash->success(__('The profesional has been deleted.'));
        } else {
            $this->Flash->error(__('The profesional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
