<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Awards Controller
 *
 * @property \App\Model\Table\AwardsTable $Awards
 */
class AwardsController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Error');
        $this->loadComponent('PatchTimeStamp');
    }

    public function index()
    {
        $awards = $this->paginate($this->Awards);

        $this->set(compact('awards'));
        $this->set('_serialize', ['awards']);
    }

    public function view($id = null)
    {
        $award = $this->Awards->get($id, [
            'contain' => []
        ]);

        $this->set('award');
        $this->set('_serialize', ['award']);
    }

    public function add()
    {
        $award = $this->Awards->newEntity();
        if ($this->request->is('post')) {

            $award = $this->PatchTimeStamp->PatchTimeEntity($this->Awards, $this->request->data, $award, false);

            $award->sort_date = str_replace('/', '-', $award->sort_date);
            $award->sort_date = date('Y-m-d', strtotime($award->sort_date));

            if ($this->Awards->save($award)) {
                $this->Flash->success(__('O award foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O award não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('award'));
        $this->set('_serialize', ['award']);
    }

    public function edit($id = null)
    {
        $award = $this->Awards->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $award = $this->PatchTimeStamp->PatchTimeEntity($this->Awards, $this->request->data, $award, false);
            
            $award->sort_date = str_replace('/', '-', $award->sort_date);
            $award->sort_date = date('Y-m-d', strtotime($award->sort_date));

            if ($this->Awards->save($award)) {
                $this->Flash->success(__('O award foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O award não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('award'));
        $this->set('_serialize', ['award']);
    }

    public function delete($id = null)
    {
        $award = $this->Awards->get($id);
                
        $award = $this->PatchTimeStamp->PatchTimeEntity($this->Awards, $this->request->data, $award, true);

        if ($this->Awards->save($award)) {
            $this->Flash->success(__('O award foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O award não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
