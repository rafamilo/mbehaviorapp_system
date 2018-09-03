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
use Cake\Utility\Inflector;
%>
<?php
namespace <%= $namespace %>\Model\Table;

<%
$uses = [
    "use $namespace\\Model\\Entity\\$entity;",
    'use Cake\ORM\Query;',
    'use Cake\ORM\RulesChecker;',
    'use Cake\ORM\Table;',
    'use Cake\Validation\Validator;',
    'use Cake\Event\Event;',
    'use Cake\Routing\Router;',
    'use DateTime;'
];
sort($uses);
echo implode("\n", $uses);
%>


/**
 * <%= $name %> Model
<% if ($associations): %>
 *
<% foreach ($associations as $type => $assocs): %>
<% foreach ($assocs as $assoc):
    if($assoc['foreignKey']=='user_up_id'){ %>
 * @property \Cake\ORM\Association\<%= Inflector::camelize($type) %> $Users_up
<% }else{ %>
 * @property \Cake\ORM\Association\<%= Inflector::camelize($type) %> $<%= $assoc['alias'] %>
<% } %>
<% endforeach %>
<% endforeach; %>
<% endif; %>

 */
class <%= $name %>Table extends Table
{

    /**
     * testando geracao de codigos
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

<% if (!empty($table)): %>
        $this->table('<%= $table %>');
<% endif %>
<% if (!empty($displayField)): %>
        $this->displayField('<%= $displayField %>');
<% endif %>
<% if (!empty($primaryKey)): %>
<% if (count($primaryKey) > 1): %>
        $this->primaryKey([<%= $this->Bake->stringifyList((array)$primaryKey, ['indent' => false]) %>]);
<% else: %>
        $this->primaryKey('<%= current((array)$primaryKey) %>');
<% endif %>
<% endif %>
<% if (!empty($behaviors)): %>

<% endif; %>
<% foreach ($behaviors as $behavior => $behaviorData): %>
        $this->addBehavior('<%= $behavior %>'<%= $behaviorData ? ", [" . implode(', ', $behaviorData) . ']' : '' %>);
<% endforeach %>
<% if (!empty($associations['belongsTo']) || !empty($associations['hasMany']) || !empty($associations['belongsToMany'])): %>

<% endif; %>
<% foreach ($associations as $type => $assocs): %>
<% foreach ($assocs as $assoc):
	$alias = $assoc['alias'];
	unset($assoc['alias']);
    if($assoc['foreignKey']=='user_up_id') {
        $alias = 'Users_up';
        $assoc = array_merge(['className' => 'Users'], $assoc);
    }
%>
        $this-><%= $type %>('<%=$alias%>', [<%= $this->Bake->stringifyList($assoc, ['indent' => 3]) %>]);
<% endforeach %>
<% endforeach %>
    }
<% if (!empty($validation)): %>

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
<%
foreach ($validation as $field => $rules):
    $validationMethods = [];
    foreach ($rules as $ruleName => $rule):
        if ($rule['rule'] && !isset($rule['provider']) && $rule['rule'] != 'date' && $rule['rule'] != 'dateTime'):
            $validationMethods[] = sprintf("->%s('%s')", $rule['rule'], $field);
        elseif ($rule['rule'] && isset($rule['provider'])):
            $validationMethods[] = sprintf(
                "->add('%s', '%s', ['rule' => '%s', 'provider' => '%s'])",
                $field,
                $ruleName,
                $rule['rule'],
                $rule['provider']
            );
        endif;

        if (isset($rule['allowEmpty'])):
            if (is_string($rule['allowEmpty'])):
                $validationMethods[] = sprintf(
                    "->allowEmpty('%s', '%s')",
                    $field,
                    $rule['allowEmpty']
                );
            elseif ($rule['allowEmpty']):
                $validationMethods[] = sprintf(
                    "->allowEmpty('%s')",
                    $field
                );
            else:
                $validationMethods[] = sprintf(
                    "->requirePresence('%s', 'create')",
                    $field
                );
                $validationMethods[] = sprintf(
                    "->notEmpty('%s')",
                    $field
                );
            endif;
        endif;
    endforeach;

    if (!empty($validationMethods)):
        $lastIndex = count($validationMethods) - 1;
        $validationMethods[$lastIndex] .= ';';
        %>
        $validator
        <%- foreach ($validationMethods as $validationMethod): %>
            <%= $validationMethod %>
        <%- endforeach; %>

<%
    endif;
endforeach;
%>
        return $validator;
    }
<% endif %>
<% if (!empty($rulesChecker)): %>

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
    <%- foreach ($rulesChecker as $field => $rule): %>
<% if (!in_array($field,['user_id','situacao_id','user_up_id'])): %>
        $rules->add($rules-><%= $rule['name'] %>(['<%= $field %>']<%= !empty($rule['extra']) ? ", '$rule[extra]'" : '' %>));
<% endif; %>
    <%- endforeach; %>
        return $rules;
    }
<% endif; %>

    public function beforeFind(Event $event,Query $queryData)
    {
      $outer = Router::getRequest();
     if($outer->controller=='<%= $name %>') {
<%
foreach ($rulesChecker as $fields => $rules) {
if($fields=='situacao_id'){ %>
              $queryData->where(['<%= $name %>.situacao_id' => 1]);
<% }
} %>
    if (!empty($outer->query)) {
           foreach ($outer->query as $key => $value) {
                if (!empty($value) && substr_count($key, '__') == 1) {
                    if(substr_count($value, '/')){
                          if(substr_count($value, ':')){
                                $data = new DateTime();
                                $value = $data->createFromFormat('d/m/Y H:i',$value);
                                $queryData->andWhere([str_replace('__', '.', $key) => $value]);
                          }else{
                                $value = implode('-', array_reverse(explode('/', $value)));
                                $queryData->andWhere([str_replace('__', '.', $key) => $value]);
                          }
                    }else{
                                $queryData->andWhere(['UPPER('.str_replace('__', '.', $key).') like' => '%'.strtoupper($value).'%']);
                    }
                }
           }
        }
     }
       return $queryData;
    }

<% if ($connection !== 'default'): %>

    /**
     * Returns the database connection name to use by default.
     *
     * @return string
     */
    public static function defaultConnectionName()
    {
        return '<%= $connection %>';
    }
<% endif; %>

    public function beforeSave(Event $event)
    {
        $entity = $event->data['entity'];
        if($entity->isNew()) {
<%
foreach ($rulesChecker as $fields => $rules) {
            if($fields=='user_id') { %>
                if (!empty($_SESSION['Auth']['User']['id'])) {
                      $entity->user_id = $_SESSION['Auth']['User']['id'];
                 }
<% }elseif($fields=='situacao_id'){ %>
                $entity->situacao_id = 1;
 <% }
      } %>
         }
        <%
        foreach ($rulesChecker as $fields => $rules) {
            if($fields=='user_up_id') { %>
        if (!empty($_SESSION['Auth']['User']['id'])) {
                    $entity->user_up_id = $_SESSION['Auth']['User']['id'];
                }

                <% }
        } %>

<%
     foreach ($validation as $field => $rules) {

      foreach ($rules as $ruleName => $rule) {
       if ($rule['rule'] && !isset($rule['provider']) && $rule['rule'] == 'date') { %>
        if (!is_object($entity-><%= $field %>)) {
         $entity-><%= $field %> = implode('-', array_reverse(explode('/', $entity-><%= $field %>)));
       }
<%
      }elseif($rule['rule'] && !isset($rule['provider']) && $rule['rule'] == 'dateTime'){ %>
        if(!is_object($entity-><%= $field %>)){
           $inicio = new DateTime();
           $now = $inicio->createFromFormat('d/m/Y H:i',$entity-><%= $field %>);
           $entity-><%= $field %> = $now;
        }
 <%
      }
      }
     }
%>
        return true;
    }
}
