<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Event\Event;
use Cake\Controller\Controller;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    public $helpers = [
        'Form' => [
            'className' => 'Bootstrap.Form',
        ],
        'Html' => [
            'className' => 'Bootstrap.Html',
        ],
        'Modal' => [
            'className' => 'Bootstrap.Modal',
        ],
        'Navbar' => [
            'className' => 'Bootstrap.Navbar',
        ],
        'Paginator' => [
            'className' => 'Bootstrap.Paginator',
        ],
        'Panel' => [
            'className' => 'Bootstrap.Panel',
        ],
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Error');

        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'unauthorizedRedirect' => $this->referer()
        ]);
        $this->Auth->allow();

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
    }

    public function beforeFilter(Event $event)
    {
        if ($this->request->getParam('prefix') != 'admin')
            $this->loadComponent('Security');
    }

    public function beforeRender(Event $event)
    {
        if (((!$this->Auth) || ($this->Auth && !$this->Auth->user())) && $this->request->getParam('action') != 'superLoginAdmin') {
            return $this->redirect(['prefix' => 'admin', 'controller' => 'Users', 'action' => 'superLoginAdmin']);
        }
        if ($this->request->getParam('prefix') == 'admin') {
            if ($this->request->getParam('action') != 'superLoginAdmin') {
                $this->viewBuilder()->setLayout('admin');
            }
            if ($this->Auth && $this->Auth->user() && ($this->request->getParam('controller') == 'Users' && $this->request->getParam('action') == 'superLoginAdmin')) {
                $this->Flash->error('Você já esta logado');
                return $this->redirect(['prefix' => 'admin', 'controller' => 'AppStatistics', 'action' => 'users']);
            } else if (!$this->Auth->user() && ($this->request->getParam('controller') != 'Users' && $this->request->getParam('action') != 'superLoginAdmin')) {
                $this->Flash->error('Você precisa estar logado para acessar essa página');
                return $this->redirect(['prefix' => 'admin', 'controller' => 'Users', 'action' => 'superLoginAdmin']);
            } else if ($this->Auth && $this->Auth->user() && $this->loadModel('Users')->get($this->Auth->user('id'))->user_type_id != 1) {
                $this->Auth->logout();
                return $this->redirect('http://www.google.com');
            }
        }

        $this->set('Auth', $this->Auth);
    }

    public function isAuthorized($user)
    {
        // Admin pode acessar todas as actions
        if (isset($user['id']) && $user['id'] == 1) {
            return true;
        }

        // Bloqueia acesso por padrão
        return false;
    }
}
