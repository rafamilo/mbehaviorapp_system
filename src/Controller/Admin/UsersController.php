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

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserTypes']
        ];
        $users = $this->paginate($this->Users);


        $this->set(compact('users'));
        $this->set('_serialize', ['users']);

    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['UserTypes', 'Announcements', 'PartyHallSchedules', 'UserInvoices', 'UserPhones']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
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

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $user = $this->Users->get($id);
                $user->situacao_id = 2;
        if ($this->Users->save($user)) {
            $this->Flash->success(__('O user foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O user não foi deletado! Tente novamente mais tarde.'));
        }
                return $this->redirect(['action' => 'index']);
    }

    /**
        * Método busca por ajax nos select2
        *
        * @param string|null $param User id.
        * @return \Cake\Network\Response|null Redirects to index.
        * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */

    public function fill()
    {
        $this->autoRender=false;
        $this->response->type('json');
        $this->viewBuilder()->layout('ajax');

        $termo = $this->request->data['termo'];
        $size = $this->request->data['size'];
        $page = (!isset($this->request->data['page']) || $this->request->data['page'] < 1) ? 1 : $this->request->data['page'];

        if (!isset($termo))
        $termo = '';
        if (!isset($size) || $size < 1)
        $size = 10;

        $query = $this->Users->find('all')
        ->where(['Users.nome LIKE ' => '%' . $termo . '%']);

        $cont = $query->count();
        $query->orderAsc('Users.nome');
        $ret["more"] = (($size * ($page - 1)) >= (int)$cont) ? false : true;
        $ret["total"] = $cont;
        $ret["dados"] = array();

        $query->limit($size);
        $query->offset($size * ($page - 1));

        foreach ($query as $d) {
        $ret["dados"][] = array('id' => $d->id, 'text' => $d->nome);
        }
        $json = json_encode($ret);
        $this->response->body($json);
    }

    /**
        * Método de pesquisa de valores no editar
        *
        * @param string|null $id User id.
        * @return \Cake\Network\Response|null Redirects to index.
        * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function getedit(){
        $this->autoRender=false;
        $this->response->type('json');
        $res = ['nome'=>'selecione','id'=>null];
        if(!empty($this->request->data['id'])){
        $user = $this->Users->get($this->request->data['id']);
            $res = ['nome'=>$user->nome,'id'=>$user->id];
        }
        $json = json_encode($res);
        $this->response->body($json);
    }
}
