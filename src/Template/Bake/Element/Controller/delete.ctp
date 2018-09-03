<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
%>

    /**
     * Delete method
     *
     * @param string|null $id <%= $singularHumanName %> id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $<%= $singularName %> = $this-><%= $currentModelName %>->get($id);
        <% if($currentModelName!= 'SituacaoCadastros'): %>
        $<%= $singularName %>->situacao_id = 2;
        if ($this-><%= $currentModelName; %>->save($<%= $singularName %>)) {
            $this->Flash->success(__('O <%= strtolower($singularHumanName) %> foi deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Desculpe! O <%= strtolower($singularHumanName) %> não foi deletado! Tente novamente mais tarde.'));
        }
        <% else: %>
        if ($this-><%= $currentModelName; %>->delete($<%= $singularName %>)) {
        $this->Flash->success(__('O <%= strtolower($singularHumanName) %> foi deletado com sucesso.'));
        } else {
        $this->Flash->error(__('Desculpe! O <%= strtolower($singularHumanName) %> não foi deletado! Tente novamente mais tarde.'));
        }
        <% endif; %>
        return $this->redirect(['action' => 'index']);
    }

    /**
        * Método busca por ajax nos select2
        *
        * @param string|null $param <%= $singularHumanName %> id.
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

        $query = $this-><%= $currentModelName %>->find('all')
        ->where(['<%= $currentModelName %>.nome LIKE ' => '%' . $termo . '%']);

        $cont = $query->count();
        $query->orderAsc('<%= $currentModelName %>.nome');
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
        * @param string|null $id <%= $singularHumanName %> id.
        * @return \Cake\Network\Response|null Redirects to index.
        * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    */
    public function getedit(){
        $this->autoRender=false;
        $this->response->type('json');
        $res = ['nome'=>'selecione','id'=>null];
        if(!empty($this->request->data['id'])){
        $<%= $singularName %> = $this-><%= $currentModelName %>->get($this->request->data['id']);
            $res = ['nome'=>$<%= $singularName %>->nome,'id'=>$<%= $singularName %>->id];
        }
        $json = json_encode($res);
        $this->response->body($json);
    }
