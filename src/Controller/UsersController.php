<?php
namespace App\Controller;

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

    public function loginApiApp()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
            } else {
                return $this->Error->emitError(400, 'Login ou senha incorretos!');
            }
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function registerApiApp()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            if (empty($this->request->data['full_metal_app_token']) || $this->request->data['full_metal_app_token'] != 'Ç!@#ASDF%@sdfgsaet5Ü6¬{[²}]a!@fæßðŧ²£3ç²¹³£¹F123bjkashÏẌẍç') {
                return $this->Error->emitError(400, 'Não foi possível salvar seu usuario, por favor, entre em contato com nosso suporte!');
            } else {
                unset($this->request->data['full_metal_app_token']);
            }

            $user = $this->PatchTimeStamp->PatchTimeEntity($this->Users, $this->request->data, $user, false);

            if (!$this->Users->save($user)) {
                return $this->Error->emitError(400, 'Não foi possível salvar seu usuário, por favor, entre em contato com nosso suporte!');
            }
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}