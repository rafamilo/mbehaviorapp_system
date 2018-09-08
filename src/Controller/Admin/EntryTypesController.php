<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * EntryTypes Controller
 *
 * @property \App\Model\Table\EntryTypesTable $EntryTypes
 */
class EntryTypesController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Error');
        $this->loadComponent('PatchTimeStamp');
    }

    public function index()
    {
        $entryTypes = $this->paginate($this->EntryTypes);

        $this->set(compact('entryTypes'));
        $this->set('_serialize', ['entryTypes']);
    }

    public function view($id = null)
    {
        $entryType = $this->EntryTypes->get($id, [
            'contain' => ['InvoicePlans']
        ]);

        $this->set('entryType');
        $this->set('_serialize', ['entryType']);
    }

    public function add()
    {
        $entryType = $this->EntryTypes->newEntity();
        if ($this->request->is('post')) {

            $entryType = $this->PatchTimeStamp->PatchTimeEntity($this->EntryTypes, $this->request->data, $entryType, false);
            
            if ($this->EntryTypes->save($entryType)) {
                $this->Flash->success(__('O entry type foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O entry type não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('entryType'));
        $this->set('_serialize', ['entryType']);
    }

    public function edit($id = null)
    {
        $entryType = $this->EntryTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $entryType = $this->PatchTimeStamp->PatchTimeEntity($this->EntryTypes, $this->request->data, $entryType, false);
                        
            if ($this->EntryTypes->save($entryType)) {
                $this->Flash->success(__('O entry type foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O entry type não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('entryType'));
        $this->set('_serialize', ['entryType']);
    }

    public function delete($id = null)
    {
        $entryType = $this->EntryTypes->get($id);
                
        $entryType = $this->PatchTimeStamp->PatchTimeEntity($this->EntryTypes, $this->request->data, $entryType, true);

        if ($this->EntryTypes->save($entryType)) {
            $this->Flash->success(__('O entry type foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O entry type não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
