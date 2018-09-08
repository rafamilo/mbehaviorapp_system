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

    public function delete($id = null)
    {
        $<%= $singularName %> = $this-><%= $currentModelName %>->get($id);
        <% if($currentModelName!= 'SituacaoCadastros'): %>
        
        $<%= $singularName %> = $this->PatchTimeStamp->PatchTimeEntity($this-><%= $currentModelName %>, $this->request->data, $<%= $singularName %>, true);

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