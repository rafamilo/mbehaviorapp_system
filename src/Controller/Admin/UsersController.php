<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
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
            'contain' => ['UserTypes']
        ];
        $users = $this->paginate($this->Users);
        $this->Flash->success(__('O user foi salvo com sucesso!'));
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['UserTypes', 'Announcements', 'PartyHallSchedules', 'UserInvoices', 'UserPhones']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O user foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O user foi salvo com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O user não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function delete($id = null)
    {
        $user = $this->Users->get($id);
                $user->status = 0;
        if ($this->Users->save($user)) {
            $this->Flash->success(__('O user foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O user não foi deletado! Tente novamente mais tarde.'));
        }
                return $this->redirect(['action' => 'index']);
    }}
