<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * UserPhones Controller
 *
 * @property \App\Model\Table\UserPhonesTable $UserPhones
 */
class UserPhonesController extends AppController
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
            'contain' => ['Users', 'PhoneTypes']
        ];
        $userPhones = $this->paginate($this->UserPhones);

        $this->set(compact('userPhones'));
        $this->set('_serialize', ['userPhones']);
    }

    public function view($id = null)
    {
        $userPhone = $this->UserPhones->get($id, [
            'contain' => ['Users', 'PhoneTypes']
        ]);

        $this->set('userPhone', $userPhone);
        $this->set('_serialize', ['userPhone']);
    }

    public function add()
    {
        $userPhone = $this->UserPhones->newEntity();
        if ($this->request->is('post')) {

            $userPhone = $this->PatchTimeStamp->PatchTimeEntity($this->UserPhones, $this->request->data, $userPhone, false);
            
            if ($this->UserPhones->save($userPhone)) {
                $this->Flash->success(__('O user phone foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user phone não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userPhone'));
        $this->set('_serialize', ['userPhone']);
    }

    public function edit($id = null)
    {
        $userPhone = $this->UserPhones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $userPhone = $this->PatchTimeStamp->PatchTimeEntity($this->UserPhones, $this->request->data, $userPhone, false);
                        
            if ($this->UserPhones->save($userPhone)) {
                $this->Flash->success(__('O user phone foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user phone não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('userPhone'));
        $this->set('_serialize', ['userPhone']);
    }

    public function delete($id = null)
    {
        $userPhone = $this->UserPhones->get($id);
                
        $userPhone = $this->PatchTimeStamp->PatchTimeEntity($this->UserPhones, $this->request->data, $userPhone, true);

        if ($this->UserPhones->save($userPhone)) {
            $this->Flash->success(__('O user phone foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O user phone não foi deletado! Tente novamente mais tarde.'));
        }
                
        return $this->redirect(['action' => 'index']);
    }}
