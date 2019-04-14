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
}
