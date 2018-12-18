<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BillsToReceive Controller
 *
 * @property \App\Model\Table\BillsToReceiveTable $BillsToReceive
 */
class BillsToReceiveController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Error');
        $this->loadComponent('PatchTimeStamp');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'InvoicePlans']
        ];
        $billsToReceive = $this->paginate($this->BillsToReceive);

        $this->set(compact('billsToReceive'));
        $this->set('_serialize', ['billsToReceive']);
    }

    public function view($id = null)
    {
        $billsToReceive = $this->BillsToReceive->get($id, [
            'contain' => ['Users', 'InvoicePlans']
        ]);

        $this->set('billsToReceive');
        $this->set('_serialize', ['billsToReceive']);
    }

    public function add()
    {
        $billsToReceive = $this->BillsToReceive->newEntity();
        if ($this->request->is('post')) {

            $billsToReceive = $this->PatchTimeStamp->PatchTimeEntity($this->BillsToReceive, $this->request->data, $billsToReceive, false);
            
            if ($this->BillsToReceive->save($billsToReceive)) {
                $this->Flash->success(__('O bills to receive foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O bills to receive não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('billsToReceive'));
        $this->set('_serialize', ['billsToReceive']);
    }

    public function edit($id = null)
    {
        $billsToReceive = $this->BillsToReceive->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $billsToReceive = $this->PatchTimeStamp->PatchTimeEntity($this->BillsToReceive, $this->request->data, $billsToReceive, false);
                        
            if ($this->BillsToReceive->save($billsToReceive)) {
                $this->Flash->success(__('O bills to receive foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O bills to receive não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('billsToReceive'));
        $this->set('_serialize', ['billsToReceive']);
    }

    public function delete($id = null)
    {
        $billsToReceive = $this->BillsToReceive->get($id);
                
        $billsToReceive = $this->PatchTimeStamp->PatchTimeEntity($this->BillsToReceive, $this->request->data, $billsToReceive, true);

        if ($this->BillsToReceive->save($billsToReceive)) {
            $this->Flash->success(__('O bills to receive foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O bills to receive não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
