<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * StartupUsers Controller
 *
 * @property \App\Model\Table\StartupUsersTable $StartupUsers
 *
 * @method \App\Model\Entity\StartupUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StartupUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $startupUsers = $this->paginate($this->StartupUsers);

        $this->set(compact('startupUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Startup User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $startupUser = $this->StartupUsers->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('startupUser', $startupUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $startupUser = $this->StartupUsers->newEntity();
        if ($this->request->is('post')) {
            $startupUser = $this->StartupUsers->patchEntity($startupUser, $this->request->getData());
            if ($this->StartupUsers->save($startupUser)) {
                $this->Flash->success(__('The startup user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The startup user could not be saved. Please, try again.'));
        }
        $users = $this->StartupUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('startupUser', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Startup User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $startupUser = $this->StartupUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $startupUser = $this->StartupUsers->patchEntity($startupUser, $this->request->getData());
            if ($this->StartupUsers->save($startupUser)) {
                $this->Flash->success(__('The startup user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The startup user could not be saved. Please, try again.'));
        }
        $users = $this->StartupUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('startupUser', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Startup User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $startupUser = $this->StartupUsers->get($id);
        if ($this->StartupUsers->delete($startupUser)) {
            $this->Flash->success(__('The startup user has been deleted.'));
        } else {
            $this->Flash->error(__('The startup user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
