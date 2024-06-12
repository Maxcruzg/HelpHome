<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Citas Controller
 *
 * @property \App\Model\Table\CitasTable $Citas
 * @method \App\Model\Entity\Cita[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CitasController extends AppController
{

    public function hireAppointment()
    {

        if ($this->request->is('post')) {
            $cita = $this->Citas->newEmptyEntity();
            $cita = $this->Citas->patchEntity($cita, $this->request->getData());

            if ($this->Citas->save($cita)) {
                $this->Flash->success(__('La cita ha sido agendada correctamente.'));
                return $this->redirect($this->referer());
            }
            $this->Flash->error(__('No se pudo agendar la cita. Por favor, inténtelo de nuevo.'));
            return $this->redirect($this->referer());
        }
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Profesionals'],
        ];
        $citas = $this->paginate($this->Citas);

        $this->set(compact('citas'));
    }


    public function view($id = null)
    {
        $cita = $this->Citas->get($id, [
            'contain' => ['Users', 'Profesionals'],
        ]);
        $this->set(compact('cita'));
    }


    public function add()
    {
        $cita = $this->Citas->newEmptyEntity();
        if ($this->request->is('post')) {
            $cita = $this->Citas->patchEntity($cita, $this->request->getData());
            if ($this->Citas->save($cita)) {
                $this->Flash->success(__('The cita has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cita could not be saved. Please, try again.'));
        }
        $users = $this->Citas->Users->find('list', ['limit' => 200])->all();
        $profesionals = $this->Citas->Profesionals->find('list', ['limit' => 200])->all();
        $this->set(compact('cita', 'users', 'profesionals'));
    }


    public function edit($id = null)
    {
        $cita = $this->Citas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cita = $this->Citas->patchEntity($cita, $this->request->getData());
            if ($this->Citas->save($cita)) {
                $this->Flash->success(__('The cita has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cita could not be saved. Please, try again.'));
        }
        $users = $this->Citas->Users->find('list', ['limit' => 200])->all();
        $profesionals = $this->Citas->Profesionals->find('list', ['limit' => 200])->all();
        $this->set(compact('cita', 'users', 'profesionals'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cita = $this->Citas->get($id);
        if ($this->Citas->delete($cita)) {
            $this->Flash->success(__('The cita has been deleted.'));
        } else {
            $this->Flash->error(__('The cita could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
