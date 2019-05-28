<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class AppStatisticsController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
    }

    public function beforeFilter(Event $event)
    {
        $this->loadModel('Users');
    }

    public function users()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function newAdmin()
    {
        $user = $this->Users->newEntity();
        
        if ($this->request->is('post')) {

            if ($this->Users->findByEmail($this->request->data['email']))
                return $this->Error->emitError(400, 'Já existe um usuário cadastrado com esse e-mail');

            $user = $this->PatchTimeStamp->PatchTimeEntity($this->Users, $this->request->data, $user, false);

            if ($this->Users->save($user))
                return $this->redirect(['prefix' => 'admin', 'controller' => 'AppStatistics', 'action' => 'users']);
            else
                $this->Flash->error(__('Não foi possível cadastrar o admin.'));
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
}
