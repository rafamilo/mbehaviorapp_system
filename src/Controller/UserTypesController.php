<?php
namespace App\Controller;

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
}