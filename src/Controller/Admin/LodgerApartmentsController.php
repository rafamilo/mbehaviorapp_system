<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * LodgerApartments Controller
 *
 * @property \App\Model\Table\LodgerApartmentsTable $LodgerApartments
 */
class LodgerApartmentsController extends AppController
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
            'contain' => ['Users', 'Apartments']
        ];
        $lodgerApartments = $this->paginate($this->LodgerApartments);

        $this->set(compact('lodgerApartments'));
        $this->set('_serialize', ['lodgerApartments']);
    }

    public function view($id = null)
    {
        $lodgerApartment = $this->LodgerApartments->get($id, [
            'contain' => ['Users', 'Apartments', 'LodgerApartmentInvoices']
        ]);

        $this->set('lodgerApartment', $lodgerApartment);
        $this->set('_serialize', ['lodgerApartment']);
    }

    public function add()
    {
        $lodgerApartment = $this->LodgerApartments->newEntity();
        if ($this->request->is('post')) {

            $lodgerApartment = $this->PatchTimeStamp->PatchTimeEntity($this->LodgerApartments, $this->request->data, $lodgerApartment, false);
            
            if ($this->LodgerApartments->save($lodgerApartment)) {
                $this->Flash->success(__('O lodger apartment foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O lodger apartment não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('lodgerApartment'));
        $this->set('_serialize', ['lodgerApartment']);
    }

    public function edit($id = null)
    {
        $lodgerApartment = $this->LodgerApartments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $lodgerApartment = $this->PatchTimeStamp->PatchTimeEntity($this->LodgerApartments, $this->request->data, $lodgerApartment, false);
                        
            if ($this->LodgerApartments->save($lodgerApartment)) {
                $this->Flash->success(__('O lodger apartment foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O lodger apartment não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('lodgerApartment'));
        $this->set('_serialize', ['lodgerApartment']);
    }

    public function delete($id = null)
    {
        $lodgerApartment = $this->LodgerApartments->get($id);
                
        $lodgerApartment = $this->PatchTimeStamp->PatchTimeEntity($this->LodgerApartments, $this->request->data, $lodgerApartment, true);

        if ($this->LodgerApartments->save($lodgerApartment)) {
            $this->Flash->success(__('O lodger apartment foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O lodger apartment não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
