<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;



class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['login', 'index', 'aprobar', 'edit']);
    }


    public function index()
    {
        $this->viewBuilder()->setLayout('profesional');
        $currentUser = $this->Authentication->getIdentity();
        $userId = $currentUser->id;
        $profesional = $this->Users->Profesional->find()
            ->where(['Profesional.user_id' => $userId])
            ->first();

        $citas = $this->Users->Profesional->Citas->find()
            ->where(['Citas.profesional_id' => $profesional->id])
            ->contain(['Users'])
            ->all();
        $this->set(compact('citas'));
        
    }


    public function historial()
    {

        $this->viewBuilder()->setLayout('profesional');
        $currentUser = $this->Authentication->getIdentity();
        $userId = $currentUser->id;
        $profesional = $this->Users->Profesional->find()
            ->where(['Profesional.user_id' => $userId])
            ->first();

        $citas = $this->Users->Profesional->Citas->find()
            ->where(['Citas.profesional_id' => $profesional->id])
            ->contain(['Users']) // Incluir los datos del usuario
            ->all();
        

        $this->set(compact('citas'));
    }

    
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Regions', 'Comunas', 'Roles', 'Provincias', 'Califications', 'Citas', 'Profesional', 'ServiceHistory', 'Token'],
        ]);

        $this->set(compact('user'));
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
}

