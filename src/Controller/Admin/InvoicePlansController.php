<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * InvoicePlans Controller
 *
 * @property \App\Model\Table\InvoicePlansTable $InvoicePlans
 */
class InvoicePlansController extends AppController
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
            'contain' => ['EntryTypes']
        ];
        $invoicePlans = $this->paginate($this->InvoicePlans);

        $this->set(compact('invoicePlans'));
        $this->set('_serialize', ['invoicePlans']);
    }

    public function view($id = null)
    {
        $invoicePlan = $this->InvoicePlans->get($id, [
            'contain' => ['EntryTypes', 'BlockInvoices', 'UserInvoices']
        ]);

        $this->set('invoicePlan');
        $this->set('_serialize', ['invoicePlan']);
    }

    public function add()
    {
        $invoicePlan = $this->InvoicePlans->newEntity();
        if ($this->request->is('post')) {

            $invoicePlan = $this->PatchTimeStamp->PatchTimeEntity($this->InvoicePlans, $this->request->data, $invoicePlan, false);
            
            if ($this->InvoicePlans->save($invoicePlan)) {
                $this->Flash->success(__('O invoice plan foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O invoice plan não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('invoicePlan'));
        $this->set('_serialize', ['invoicePlan']);
    }

    public function edit($id = null)
    {
        $invoicePlan = $this->InvoicePlans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $invoicePlan = $this->PatchTimeStamp->PatchTimeEntity($this->InvoicePlans, $this->request->data, $invoicePlan, false);
                        
            if ($this->InvoicePlans->save($invoicePlan)) {
                $this->Flash->success(__('O invoice plan foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O invoice plan não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('invoicePlan'));
        $this->set('_serialize', ['invoicePlan']);
    }

    public function delete($id = null)
    {
        $invoicePlan = $this->InvoicePlans->get($id);
                
        $invoicePlan = $this->PatchTimeStamp->PatchTimeEntity($this->InvoicePlans, $this->request->data, $invoicePlan, true);

        if ($this->InvoicePlans->save($invoicePlan)) {
            $this->Flash->success(__('O invoice plan foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O invoice plan não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
