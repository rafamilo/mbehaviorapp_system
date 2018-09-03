<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Weeks Controller
 *
 * @property \App\Model\Table\WeeksTable $Weeks
 *
 * @method \App\Model\Entity\Week[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WeeksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Editions']
        ];
        $weeks = $this->paginate($this->Weeks);

        $this->set(compact('weeks'));
    }

    /**
     * View method
     *
     * @param string|null $id Week id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $week = $this->Weeks->get($id, [
            'contain' => ['Editions']
        ]);

        $this->set('week', $week);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $week = $this->Weeks->newEntity();
        if ($this->request->is('post')) {
            $week = $this->Weeks->patchEntity($week, $this->request->getData());
            if ($this->Weeks->save($week)) {
                $this->Flash->success(__('The week has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The week could not be saved. Please, try again.'));
        }
        $editions = $this->Weeks->Editions->find('list', ['limit' => 200]);
        $this->set(compact('week', 'editions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Week id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $week = $this->Weeks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $week = $this->Weeks->patchEntity($week, $this->request->getData());
            if ($this->Weeks->save($week)) {
                $this->Flash->success(__('The week has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The week could not be saved. Please, try again.'));
        }
        $editions = $this->Weeks->Editions->find('list', ['limit' => 200]);
        $this->set(compact('week', 'editions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Week id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $week = $this->Weeks->get($id);
        if ($this->Weeks->delete($week)) {
            $this->Flash->success(__('The week has been deleted.'));
        } else {
            $this->Flash->error(__('The week could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
