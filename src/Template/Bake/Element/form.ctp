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
<div class="content-wrapper">
    <div class="row">
        <div>
            <h2>
                <%= $pluralHumanName %>
            </h2>
            <strong>
                <% if (strpos($action, 'add') === false): %>
                Editar
                <%= $pluralHumanName %>
                <% else: %>
                Cadastrar
                <%= $pluralHumanName %>
                <% endif; %>
            </strong>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div id="<%= $pluralVar %>" class="form">
            <?= $this->Form->create($<%= $singularVar %>) ?>
            <fieldset>
                <% if (strpos($action, 'add') === false): %>
                <legend>
                    <?= __('Editar <%= $singularHumanName %>') ?>
                </legend>
                <% else: %>
                <legend>
                    <?= __('Cadastrar <%= $singularHumanName %>') ?>
                </legend>
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
                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $singularVar %>-><%= $field %>, 'empty' => 'selecione', class=>'form-control']); ?>
                    <% else: %>
                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill',  'empty' => 'selecione', class=>'form-control']); ?>
                    <% endif; %>
                </div>
                <% } else { %>
                <div class='col-md-6'>
                    <% if (strpos($action, 'add') === false): %>
                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $singularVar %>-><%= $field %>, class=>'form-control']); ?>
                    <% else: %>
                    <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill', class=>'form-control']); ?>
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
                    <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]); ?>
                    <% else: %>
                    <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]); ?>
                    <% endif; %>
                </div>
                <% }elseif($fieldData['type'] === 'datetime'){ %>
                <div class='col-md-6'>
                    <% if (strpos($action, 'add') === true): %>
                    <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datetimepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]); ?>
                    <% else: %>
                    <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datetimepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y HH:mm'), 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]); ?>
                    <% endif; %>
                </div>
                <% }else{ %>
                <div class='col-md-6'>
                    <?php echo $this->Form->input('<%= $field %>', ['empty' => true, class=>'form-control']); ?>
                </div>
                <%        }
                        } else {
                        if($fieldData['type'] === 'date') { %>
                <div class='col-md-6'>
                    <% if (strpos($action, 'add') === false): %>
                    <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]); ?>
                    <% else: %>
                    <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]); ?>
                    <% endif; %>
                </div>
                <% }elseif($fieldData['type'] === 'datetime'){ %>
                <div class='col-md-6'>
                    <?php <% if (strpos($action, 'add') === false): %>
                                    echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datetimepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]);
                                            <% else: %>
                                    echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datetimepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]);
                                    <% endif; %> ?>
                </div>
                <% }else{ %>
                <div class='col-md-6'>
                    <% if($fieldData['type'] === 'decimal'){ %>
                    <?=$this->Form->input('<%= $field %>',['prepend' => 'R$', 'type' => 'text', 'mask' => 'money', class=>'form-control']); ?>
                    <% }else{ %>
                    <?=$this->Form->input('<%= $field %>', [class=>'form-control']); ?>
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
                    <?php echo $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>, class=>'form-control']); ?>
                </div>
                <%
                        }
                        }
                        %>
            </fieldset>
            <div class="col-md-12 text-right">
                <?= $this->Form->submit(__('Salvar'),['class'=>'btn btn-primary mr-2']) ?>
                <?= $this->Form->Button(__('Cancelar'), ['class'=>'btn-light', 'onclick'=>'verifyCancel(event)'])>
            </div>
            <div class="clearfix"></div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>