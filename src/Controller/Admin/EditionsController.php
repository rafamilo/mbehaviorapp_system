<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Editions Controller
 *
 * @property \App\Model\Table\EditionsTable $Editions
 *
 * @method \App\Model\Entity\Edition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EditionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $editions = $this->paginate($this->Editions);

        $this->set(compact('editions'));
    }

    /**
     * View method
     *
     * @param string|null $id Edition id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $edition = $this->Editions->get($id, [
            'contain' => ['Weeks']
        ]);

        $this->set('edition', $edition);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $edition = $this->Editions->newEntity();
        if ($this->request->is('post')) {
            $edition = $this->Editions->patchEntity($edition, $this->request->getData());
            if ($this->Editions->save($edition)) {
                $this->Flash->success(__('The edition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The edition could not be saved. Please, try again.'));
        }
        $this->set(compact('edition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Edition id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $edition = $this->Editions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $edition = $this->Editions->patchEntity($edition, $this->request->getData());
            if ($this->Editions->save($edition)) {
                $this->Flash->success(__('The edition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The edition could not be saved. Please, try again.'));
        }
        $this->set(compact('edition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Edition id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $edition = $this->Editions->get($id);
        if ($this->Editions->delete($edition)) {
            $this->Flash->success(__('The edition has been deleted.'));
        } else {
            $this->Flash->error(__('The edition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
