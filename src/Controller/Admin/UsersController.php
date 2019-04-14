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

    public function superLoginAdmin()
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
    
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
