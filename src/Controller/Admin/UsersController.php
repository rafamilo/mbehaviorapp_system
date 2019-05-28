<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

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

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Permitir aos usuários se registrarem e efetuar logout.
        // Você não deve adicionar a ação de "login" a lista de permissões.
        // Isto pode causar problemas com o funcionamento normal do AuthComponent.
        $this->Auth->allow(['register', 'logout']);
    }

    public function superLoginAdmin()
    {
        $this->viewBuilder()->setLayout('admin_login');
        $user = $this->Users->newEntity();
        
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                $this->redirect(['prefix' => 'admin', 'controller' => 'AppStatistics', 'action' => 'users']);
            } else {
                return $this->Flash->error(__('Login ou senha incorretos.'));
            }
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    
    public function logout()
    {
        $this->Flash->success('Você foi desconectado com sucesso!');
        $this->Auth->logout();
        return $this->redirect(['prefix' => 'admin', 'controller' => 'Users', 'action' => 'superLoginAdmin']);
    }
}
