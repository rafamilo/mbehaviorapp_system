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
        if (in_array($this->request->params['action'], ['registerApiApp', 'loginApiApp'])) {
            // for csrf
            $this->eventManager()->off($this->Csrf);
        
            // for security component
            $this->Security->config('unlockedActions', ['registerApiApp', 'loginApiApp']);
        }
        // Permitir aos usuários se registrarem e efetuar logout.
        // Você não deve adicionar a ação de "login" a lista de permissões.
        // Isto pode causar problemas com o funcionamento normal do AuthComponent.
        $this->Auth->allow(['register', 'logout']);
    }

    public function loginApiApp()
    {
        if (empty($this->request->data['full_metal_app_token']) || $this->request->data['full_metal_app_token'] != 'NãoTemComoAdivinharEsseTokenÇç')
            return $this->Error->emitError(400, "'_Token' was not found in request data");

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if (!$user)
                return $this->Error->emitError(400, 'Login ou senha incorretos!');
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function registerApiApp()
    {
        $user = $this->Users->newEntity();
        $this->getEventManager()->off($this->Csrf);

        if (empty($this->request->data))
            return $this->Error->emitError(500);
        
        if ($this->request->is('post')) {
            if (empty($this->request->data['full_metal_app_token']) || $this->request->data['full_metal_app_token'] != 'NãoTemComoAdivinharEsseTokenÇç') {
                return $this->Error->emitError(400, "'_Token' was not found in request data");
            } else {
                unset($this->request->data['full_metal_app_token']);
            }

            $birthdate = str_replace('/', '-', $this->request->data['birthdate']);
            $this->request->data['birthdate'] = date('Y-m-d', strtotime($birthdate));

            if ($this->Users->findByEmail($this->request->data['email']))
                return $this->Error->emitError(400, 'Já existe um usuário cadastrado com esse e-mail');

            $user = $this->PatchTimeStamp->PatchTimeEntity($this->Users, $this->request->data, $user, false);

            if (!$this->Users->save($user))
                return $this->Error->emitError(400, 'Não foi possível salvar seu usuário, por favor, entre em contato com nosso suporte!');
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
}