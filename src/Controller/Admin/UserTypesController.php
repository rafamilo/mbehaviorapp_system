<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UserTypes Controller
 *
 * @property \App\Model\Table\UserTypesTable $UserTypes
 */
class UserTypesController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Error');
        $this->loadComponent('PatchTimeStamp');
    }

    public function index()
    {
        $userTypes = $this->paginate($this->UserTypes);

        $this->set(compact('userTypes'));
        $this->set('_serialize', ['userTypes']);
    }

    public function view($id = null)
    {
        $userType = $this->UserTypes->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userType', $userType);
        $this->set('_serialize', ['userType']);
    }

    public function add()
    {
        $userType = $this->UserTypes->newEntity();
        if ($this->request->is('post')) {

            $userType = $this->PatchTimeStamp->PatchTimeEntity($this->UserTypes, $this->request->data, $userType, false);
            
            if ($this->UserTypes->save($userType)) {
                $this->Flash->success(__('O user type foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user type não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userType'));
        $this->set('_serialize', ['userType']);
    }

    public function edit($id = null)
    {
        $userType = $this->UserTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $userType = $this->PatchTimeStamp->PatchTimeEntity($this->UserTypes, $this->request->data, $userType, false);
                        
            if ($this->UserTypes->save($userType)) {
                $this->Flash->success(__('O user type foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user type não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userType'));
        $this->set('_serialize', ['userType']);
    }

    public function delete($id = null)
    {
        $userType = $this->UserTypes->get($id);
                
        $userType = $this->PatchTimeStamp->PatchTimeEntity($this->UserTypes, $this->request->data, $userType, true);

        if ($this->UserTypes->save($userType)) {
            $this->Flash->success(__('O user type foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O user type não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
