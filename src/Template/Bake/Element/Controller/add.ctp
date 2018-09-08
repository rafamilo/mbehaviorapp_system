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
$compact = ["'" . $singularName . "'"];
%>

    public function add()
    {
        $<%= $singularName %> = $this-><%= $currentModelName %>->newEntity();
        if ($this->request->is('post')) {

            $<%= $singularName %> = $this->PatchTimeStamp->PatchTimeEntity($this-><%= $currentModelName %>, $this->request->data, $<%= $singularName %>, false);
            
            if ($this-><%= $currentModelName; %>->save($<%= $singularName %>)) {
                $this->Flash->success(__('O <%= strtolower($singularHumanName) %> foi salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O <%= strtolower($singularHumanName) %> não foi salvo. Por favor, tente novamente.'));
            }
        }

        $this->set(compact('<%= $singularName %>'));
        $this->set('_serialize', ['<%=$singularName%>']);
    }
