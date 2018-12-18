<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BillsToPay Controller
 *
 * @property \App\Model\Table\BillsToPayTable $BillsToPay
 */
class BillsToPayController extends AppController
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
        $billsToPay = $this->paginate($this->BillsToPay);

        $this->set(compact('billsToPay'));
        $this->set('_serialize', ['billsToPay']);
    }

    public function view($id = null)
    {
        $billsToPay = $this->BillsToPay->get($id, [
            'contain' => ['Users', 'InvoicePlans']
        ]);

        $this->set('billsToPay');
        $this->set('_serialize', ['billsToPay']);
    }

    public function add()
    {
        $billsToPay = $this->BillsToPay->newEntity();
        if ($this->request->is('post')) {

            $billsToPay = $this->PatchTimeStamp->PatchTimeEntity($this->BillsToPay, $this->request->data, $billsToPay, false);
            
            if ($this->BillsToPay->save($billsToPay)) {
                $this->Flash->success(__('O bills to pay foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O bills to pay não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('billsToPay'));
        $this->set('_serialize', ['billsToPay']);
    }

    public function edit($id = null)
    {
        $billsToPay = $this->BillsToPay->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $billsToPay = $this->PatchTimeStamp->PatchTimeEntity($this->BillsToPay, $this->request->data, $billsToPay, false);
                        
            if ($this->BillsToPay->save($billsToPay)) {
                $this->Flash->success(__('O bills to pay foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O bills to pay não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('billsToPay'));
        $this->set('_serialize', ['billsToPay']);
    }

    public function delete($id = null)
    {
        $billsToPay = $this->BillsToPay->get($id);
                
        $billsToPay = $this->PatchTimeStamp->PatchTimeEntity($this->BillsToPay, $this->request->data, $billsToPay, true);

        if ($this->BillsToPay->save($billsToPay)) {
            $this->Flash->success(__('O bills to pay foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O bills to pay não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
