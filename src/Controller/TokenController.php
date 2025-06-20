<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Token Controller
 *
 * @property \App\Model\Table\TokenTable $Token
 * @method \App\Model\Entity\Token[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TokenController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $token = $this->paginate($this->Token);

        $this->set(compact('token'));
    }

    /**
     * View method
     *
     * @param string|null $id Token id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $token = $this->Token->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('token'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $token = $this->Token->newEmptyEntity();
        if ($this->request->is('post')) {
            $token = $this->Token->patchEntity($token, $this->request->getData());
            if ($this->Token->save($token)) {
                $this->Flash->success(__('The token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The token could not be saved. Please, try again.'));
        }
        $users = $this->Token->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('token', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Token id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $token = $this->Token->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $token = $this->Token->patchEntity($token, $this->request->getData());
            if ($this->Token->save($token)) {
                $this->Flash->success(__('The token has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The token could not be saved. Please, try again.'));
        }
        $users = $this->Token->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('token', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Token id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $token = $this->Token->get($id);
        if ($this->Token->delete($token)) {
            $this->Flash->success(__('The token has been deleted.'));
        } else {
            $this->Flash->error(__('The token could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
