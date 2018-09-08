<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * PhoneTypes Controller
 *
 * @property \App\Model\Table\PhoneTypesTable $PhoneTypes
 */
class PhoneTypesController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Error');
        $this->loadComponent('PatchTimeStamp');
    }

    public function index()
    {
        $phoneTypes = $this->paginate($this->PhoneTypes);

        $this->set(compact('phoneTypes'));
        $this->set('_serialize', ['phoneTypes']);
    }

    public function view($id = null)
    {
        $phoneType = $this->PhoneTypes->get($id, [
            'contain' => ['UserPhones']
        ]);

        $this->set('phoneType');
        $this->set('_serialize', ['phoneType']);
    }

    public function add()
    {
        $phoneType = $this->PhoneTypes->newEntity();
        if ($this->request->is('post')) {

            $phoneType = $this->PatchTimeStamp->PatchTimeEntity($this->PhoneTypes, $this->request->data, $phoneType, false);
            
            if ($this->PhoneTypes->save($phoneType)) {
                $this->Flash->success(__('O phone type foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O phone type não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('phoneType'));
        $this->set('_serialize', ['phoneType']);
    }

    public function edit($id = null)
    {
        $phoneType = $this->PhoneTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $phoneType = $this->PatchTimeStamp->PatchTimeEntity($this->PhoneTypes, $this->request->data, $phoneType, false);
                        
            if ($this->PhoneTypes->save($phoneType)) {
                $this->Flash->success(__('O phone type foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O phone type não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('phoneType'));
        $this->set('_serialize', ['phoneType']);
    }

    public function delete($id = null)
    {
        $phoneType = $this->PhoneTypes->get($id);
                
        $phoneType = $this->PatchTimeStamp->PatchTimeEntity($this->PhoneTypes, $this->request->data, $phoneType, true);

        if ($this->PhoneTypes->save($phoneType)) {
            $this->Flash->success(__('O phone type foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O phone type não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
