<%

use Cake\Utility\Inflector;

$fields = collection($fields)
->filter(function($field) use ($schema) {
return $schema->columnType($field) !== 'binary';
});

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
$fields = $fields->reject(function ($field) {
return $field === 'lft' || $field === 'rght';
});
}
%>
<div class="this-place">
    <div class="white-bg page-heading">
        <div class="col-lg-9">
            <h2><%= $pluralHumanName %></h2>
            <ol class="breadcrumb">
                <li><%= $pluralHumanName %></li>
                <li class="active">
                    <strong>
                        <% if (strpos($action, 'add') === false): %>
                        Editar <%= $pluralHumanName %>
                        <% else: %>
                        Cadastrar <%= $pluralHumanName %>
                        <% endif; %>
                    </strong>
                </li>
            </ol>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="area">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="<%= $pluralVar %> form">
                            <?= $this->Form->create($<%= $singularVar %>) ?>
                            <fieldset>
                                <% if (strpos($action, 'add') === false): %>
                                <legend><?= __('Editar <%= $singularHumanName %>') ?></legend>
                                <% else: %>
                                <legend><?= __('Cadastrar <%= $singularHumanName %>') ?></legend>
                                <% endif; %>
                                <%
                                foreach ($fields as $field) {
                                if (in_array($field, $primaryKey)) {
                                    continue;
                                }
                                if (isset($keyFields[$field])) {
                                    $fieldData = $schema->column($field);
                                    if(!in_array($field,['situacao_id','user_id','user_up_id'])) {
                                        if (!empty($fieldData['null'])) { %>
                                            <div class='col-md-6'>
                                                <% if (strpos($action, 'add') === false): %>
                                                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $singularVar %>-><%= $field %>, 'empty' => 'selecione']); ?>
                                                <% else: %>
                                                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill',  'empty' => 'selecione']); ?>
                                                 <% endif; %>
                                            </div>
                                            <% } else { %>
                                            <div class='col-md-6'>
                                                <% if (strpos($action, 'add') === false): %>
                                                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $singularVar %>-><%= $field %>]); ?>
                                                <% else: %>
                                                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill']); ?>
                                                    <% endif; %>
                                            </div>
                                            <%
                                        }
                                    }
                                    continue;
                                }
                                if (!in_array($field, ['created', 'modified', 'updated'])) {
                                $fieldData = $schema->column($field);
                                if (($fieldData['type'] === 'date') && (!empty($fieldData['null']))) {
                                    if($fieldData['type'] === 'date'){ %>
                                        <div class='col-md-6'>
                                            <% if (strpos($action, 'add') === false): %>
                                                <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                                            <% else: %>
                                                <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                            <% endif; %>
                                        </div>
                                        <% }elseif($fieldData['type'] === 'datetime'){ %>
                                        <div class='col-md-6'>
                                             <% if (strpos($action, 'add') === true): %>
                                                <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datetimepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                                <% else: %>
                                                <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datetimepicker','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y HH:mm'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                            <% endif; %>
                                        </div>
                                        <% }else{ %>
                                        <div class='col-md-6'>
                                            <?php echo $this->Form->input('<%= $field %>', ['empty' => true]); ?>
                                        </div>
                                        <%        }
                                } else {
                                if($fieldData['type'] === 'date') { %>
                                    <div class='col-md-6'>
                                        <% if (strpos($action, 'add') === false): %>
                                            <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                                    <% else: %>
                                            <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                        <% endif; %>
                                    </div>
                                     <% }elseif($fieldData['type'] === 'datetime'){ %>
                                    <div class='col-md-6'>
                                        <?php <% if (strpos($action, 'add') === false): %>
                                            echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datetimepicker','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y H:m'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]);
                                                    <% else: %>
                                            echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datetimepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]);
                                            <% endif; %> ?>
                                    </div>
                                <% }else{ %>
                                <div class='col-md-6'>
                                    <% if($fieldData['type'] === 'decimal'){ %>
                                        <?=$this->Form->input('<%= $field %>',['prepend' => 'R$', 'type' => 'text', 'mask' => 'money']); ?>
                                        <% }else{ %>
                                        <?=$this->Form->input('<%= $field %>'); ?>
                                    <% } %>
                                </div>
                                <%
                                }
                                }
                                }
                                }
                                if (!empty($associations['BelongsToMany'])) {
                                foreach ($associations['BelongsToMany'] as $assocName => $assocData) {
                                %>
                                <div class='col-md-6'>
                                    <?php echo $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>]); ?>
                                </div>
                                <%
                                }
                                }
                                %>
                            </fieldset>
                            <div class="col-md-12 text-right">
                                <?= $this->Form->submit(__('Salvar'),['class'=>'btn btn-primary']) ?>
                            </div>
                            <div class="clearfix"></div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

