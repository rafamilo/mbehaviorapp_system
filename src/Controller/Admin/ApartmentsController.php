<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Apartments Controller
 *
 * @property \App\Model\Table\ApartmentsTable $Apartments
 */
class ApartmentsController extends AppController
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
            'contain' => ['Users']
        ];
        $apartments = $this->paginate($this->Apartments);

        $this->set(compact('apartments'));
        $this->set('_serialize', ['apartments']);
    }

    public function view($id = null)
    {
        $apartment = $this->Apartments->get($id, [
            'contain' => ['Users', 'LodgerApartments', 'UserInvoices']
        ]);

        $this->set('apartment', $apartment);
        $this->set('_serialize', ['apartment']);
    }

    public function add()
    {
        $apartment = $this->Apartments->newEntity();
        if ($this->request->is('post')) {

            $apartment = $this->PatchTimeStamp->PatchTimeEntity($this->Apartments, $this->request->data, $apartment, false);
            
            if ($this->Apartments->save($apartment)) {
                $this->Flash->success(__('O apartment foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O apartment não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('apartment'));
        $this->set('_serialize', ['apartment']);
    }

    public function edit($id = null)
    {
        $apartment = $this->Apartments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $apartment = $this->PatchTimeStamp->PatchTimeEntity($this->Apartments, $this->request->data, $apartment, false);
                        
            if ($this->Apartments->save($apartment)) {
                $this->Flash->success(__('O apartment foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O apartment não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('apartment'));
        $this->set('_serialize', ['apartment']);
    }

    public function delete($id = null)
    {
        $apartment = $this->Apartments->get($id);
                
        $apartment = $this->PatchTimeStamp->PatchTimeEntity($this->Apartments, $this->request->data, $apartment, true);

        if ($this->Apartments->save($apartment)) {
            $this->Flash->success(__('O apartment foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O apartment não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
