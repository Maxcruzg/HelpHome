<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;


class ProfesionalController extends AppController
{
    public function view($id = null)
    {
        $profesional = $this->Profesional->get($id, [
            'contain' => ['Users', 'Especialidad', 'Citas', 'ServiceHistory'],
        ]);

        $this->set(compact('profesional'));
    }



    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('profesional');
        $userId = $this->Authentication->getIdentity()->getIdentifier();

        $user = $this->Profesional->Users->get($userId, ['contain' => ['Profesional' => 'Especialidad']]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            // Verificar si se está editando como usuario regular o como profesional
            if ($this->request->getData('is_profesional')) {
                // Editar como profesional
                $user->profesional = $this->Profesional->patchEntity(
                    $user->profesional,
                    $this->request->getData('profesional')
                );
            } else {

                $user = $this->Profesional->Users->patchEntity($user, $this->request->getData());
            }

            if ($this->Users->save($user, ['associated' => ['Profesional']])) {
                $this->Flash->success(__('Perfil actualizado correctamente.'));
                return $this->redirect(['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index']);
            }
            $this->Flash->error(__('No se pudo actualizar el perfil. Por favor, intente nuevamente.'));
        }

        $comunas = $this->Profesional->Users->Comunas->find('list', ['limit' => 200])->all();
        $especialidad = $this->Profesional->Especialidad->find('list', ['limit' => 200])->all();
        $provincias = $this->Profesional->Users->Provincias->find('list', ['limit' => 200])->all();
        $regions = $this->Profesional->Users->Regions->find('list', ['limit' => 200])->all();

        $this->set(compact('user', 'regions', 'comunas', 'especialidad', 'provincias'));
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
