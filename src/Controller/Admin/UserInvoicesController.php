<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UserInvoices Controller
 *
 * @property \App\Model\Table\UserInvoicesTable $UserInvoices
 */
class UserInvoicesController extends AppController
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
            'contain' => ['Users', 'Apartments', 'InvoicePlans']
        ];
        $userInvoices = $this->paginate($this->UserInvoices);

        $this->set(compact('userInvoices'));
        $this->set('_serialize', ['userInvoices']);
    }

    public function view($id = null)
    {
        $userInvoice = $this->UserInvoices->get($id, [
            'contain' => ['Users', 'Apartments', 'InvoicePlans']
        ]);

        $this->set('userInvoice');
        $this->set('_serialize', ['userInvoice']);
    }

    public function add()
    {
        $userInvoice = $this->UserInvoices->newEntity();
        if ($this->request->is('post')) {

            $userInvoice = $this->PatchTimeStamp->PatchTimeEntity($this->UserInvoices, $this->request->data, $userInvoice, false);
            
            if ($this->UserInvoices->save($userInvoice)) {
                $this->Flash->success(__('O user invoice foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user invoice não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userInvoice'));
        $this->set('_serialize', ['userInvoice']);
    }

    public function edit($id = null)
    {
        $userInvoice = $this->UserInvoices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $userInvoice = $this->PatchTimeStamp->PatchTimeEntity($this->UserInvoices, $this->request->data, $userInvoice, false);
                        
            if ($this->UserInvoices->save($userInvoice)) {
                $this->Flash->success(__('O user invoice foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user invoice não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userInvoice'));
        $this->set('_serialize', ['userInvoice']);
    }

    public function delete($id = null)
    {
        $userInvoice = $this->UserInvoices->get($id);
                
        $userInvoice = $this->PatchTimeStamp->PatchTimeEntity($this->UserInvoices, $this->request->data, $userInvoice, true);

        if ($this->UserInvoices->save($userInvoice)) {
            $this->Flash->success(__('O user invoice foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O user invoice não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
