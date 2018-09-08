<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * LodgerApartmentInvoices Controller
 *
 * @property \App\Model\Table\LodgerApartmentInvoicesTable $LodgerApartmentInvoices
 */
class LodgerApartmentInvoicesController extends AppController
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
            'contain' => ['LodgerApartments']
        ];
        $lodgerApartmentInvoices = $this->paginate($this->LodgerApartmentInvoices);

        $this->set(compact('lodgerApartmentInvoices'));
        $this->set('_serialize', ['lodgerApartmentInvoices']);
    }

    public function view($id = null)
    {
        $lodgerApartmentInvoice = $this->LodgerApartmentInvoices->get($id, [
            'contain' => ['LodgerApartments']
        ]);

        $this->set('lodgerApartmentInvoice');
        $this->set('_serialize', ['lodgerApartmentInvoice']);
    }

    public function add()
    {
        $lodgerApartmentInvoice = $this->LodgerApartmentInvoices->newEntity();
        if ($this->request->is('post')) {

            $lodgerApartmentInvoice = $this->PatchTimeStamp->PatchTimeEntity($this->LodgerApartmentInvoices, $this->request->data, $lodgerApartmentInvoice, false);
            
            if ($this->LodgerApartmentInvoices->save($lodgerApartmentInvoice)) {
                $this->Flash->success(__('O lodger apartment invoice foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O lodger apartment invoice não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('lodgerApartmentInvoice'));
        $this->set('_serialize', ['lodgerApartmentInvoice']);
    }

    public function edit($id = null)
    {
        $lodgerApartmentInvoice = $this->LodgerApartmentInvoices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $lodgerApartmentInvoice = $this->PatchTimeStamp->PatchTimeEntity($this->LodgerApartmentInvoices, $this->request->data, $lodgerApartmentInvoice, false);
                        
            if ($this->LodgerApartmentInvoices->save($lodgerApartmentInvoice)) {
                $this->Flash->success(__('O lodger apartment invoice foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O lodger apartment invoice não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('lodgerApartmentInvoice'));
        $this->set('_serialize', ['lodgerApartmentInvoice']);
    }

    public function delete($id = null)
    {
        $lodgerApartmentInvoice = $this->LodgerApartmentInvoices->get($id);
                
        $lodgerApartmentInvoice = $this->PatchTimeStamp->PatchTimeEntity($this->LodgerApartmentInvoices, $this->request->data, $lodgerApartmentInvoice, true);

        if ($this->LodgerApartmentInvoices->save($lodgerApartmentInvoice)) {
            $this->Flash->success(__('O lodger apartment invoice foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O lodger apartment invoice não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
