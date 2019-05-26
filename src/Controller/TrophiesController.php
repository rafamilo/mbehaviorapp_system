<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class TrophiesController extends AppController
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
        if (in_array($this->request->params['action'], ['getTrophies'])) {
            // for csrf
            $this->eventManager()->off($this->Csrf);
        
            // for security component
            $this->Security->config('unlockedActions', ['getTrophies']);
        }
        // Permitir aos usuários se registrarem e efetuar logout.
        // Você não deve adicionar a ação de "login" a lista de permissões.
        // Isto pode causar problemas com o funcionamento normal do AuthComponent.
        $this->Auth->allow(['getTrophies']);
    }

    public function getTrophies()
    {
        if (empty($this->request->query(['full_metal_app_token'])) || $this->request->query(['full_metal_app_token']) != 'NãoTemComoAdivinharEsseTokenÇç')
            return $this->Error->emitError(400, "'_Token' was not found in request data");

        if ($this->request->is('get')) {
            $trophies = $this->loadModel('Awards')->find()->select(['id' => 'id', 'name', 'description', 'sortDate' => 'sort_date', 'modalVisible']);
            foreach($trophies as $trophy) {
                $trophy->id = strval($trophy->id);
            }
        } else {
            return $this->Error->emitError(400, "Only get route!");
        }

        $this->set(compact('trophies'));
        $this->set('_serialize', ['trophies']);
    }
}