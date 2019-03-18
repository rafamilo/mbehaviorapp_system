<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserApps Controller
 *
 * @property \App\Model\Table\UserAppsTable $UserApps
 */
class UserAppsController extends AppController
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
        $userApps = $this->paginate($this->UserApps);

        $this->set(compact('userApps'));
        $this->set('_serialize', ['userApps']);
    }

    public function view($id = null)
    {
        $userApp = $this->UserApps->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userApp');
        $this->set('_serialize', ['userApp']);
    }

    public function add()
    {
        $userApp = $this->UserApps->newEntity();
        if ($this->request->is('post')) {

            $userApp = $this->PatchTimeStamp->PatchTimeEntity($this->UserApps, $this->request->data, $userApp, false);
            
            if ($this->UserApps->save($userApp)) {
                $this->Flash->success(__('O user app foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user app não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userApp'));
        $this->set('_serialize', ['userApp']);
    }

    public function edit($id = null)
    {
        $userApp = $this->UserApps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $userApp = $this->PatchTimeStamp->PatchTimeEntity($this->UserApps, $this->request->data, $userApp, false);
                        
            if ($this->UserApps->save($userApp)) {
                $this->Flash->success(__('O user app foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user app não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userApp'));
        $this->set('_serialize', ['userApp']);
    }

    public function delete($id = null)
    {
        $userApp = $this->UserApps->get($id);
                
        $userApp = $this->PatchTimeStamp->PatchTimeEntity($this->UserApps, $this->request->data, $userApp, true);

        if ($this->UserApps->save($userApp)) {
            $this->Flash->success(__('O user app foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O user app não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
