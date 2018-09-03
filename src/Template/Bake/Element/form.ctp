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
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        <%= $pluralHumanName %>
                    </h2>
                    <strong>
                        <% if (strpos($action, 'add') === false): %>
                        <?= __('Editar <%= $singularHumanName %>') ?>
                        <% else: %>
                        <?= __('Cadastrar <%= $singularHumanName %>') ?>
                        <% endif; %>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="<%= $pluralVar %>" class="form card-body">
                    <?= $this->Form->create($<%= $singularVar %>) ?>
                    <div class="col-12 no-padding row">
                            <%
                            foreach ($fields as $field) {
                            if (in_array($field, $primaryKey)) {
                                continue;
                            }
                            if (isset($keyFields[$field])) {
                                $fieldData = $schema->column($field);
                                if(!in_array($field,['situacao_id','user_id','user_up_id'])) {
                                    if (!empty($fieldData['null'])) { %>
                        <div class='col-6 no-padding'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $singularVar %>-><%= $field %>, 'empty' => 'selecione', 'class'=>'form-control']); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill',  'empty' => 'selecione', 'class'=>'form-control']); ?>
                            <% endif; %>
                        </div>
                        <% } else { %>
                        <div class='col-6 no-padding'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $singularVar %>-><%= $field %>, 'class'=>'form-control']); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill', 'class'=>'form-control']); ?>
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
                        <div class='col-6 no-padding'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]]); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]]); ?>
                            <% endif; %>
                        </div>
                        <% }elseif($fieldData['type'] === 'datetime'){ %>
                        <div class='col-6 no-padding'>
                            <% if (strpos($action, 'add') === true): %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datetimepicker form-control', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]]); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datetimepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y HH:mm'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]]); ?>
                            <% endif; %>
                        </div>
                        <% }else{ %>
                        <div class='col-6 no-padding'>
                            <?php echo $this->Form->input('<%= $field %>', ['empty' => true, 'class'=>'form-control']); ?>
                        </div>
                        <%        }
                            } else {
                            if($fieldData['type'] === 'date') { %>
                        <div class='col-6 no-padding'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]]); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]]); ?>
                            <% endif; %>
                        </div>
                        <% }elseif($fieldData['type'] === 'datetime'){ %>
                        <div class='col-6 no-padding'>
                            <?php <% if (strpos($action, 'add') === false): %>
                                        echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datetimepicker form-control','value'=>$this->Time->format($<%= $singularVar %>-><%= $field %>,'dd/MM/Y H:m'), 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]]);
                                                <% else: %>
                                        echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datetimepicker form-control', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]);
                                        <% endif; %> ?>
                        </div>
                        <% }else{ %>
                        <div class='col-6 no-padding'>
                            <% if($fieldData['type'] === 'decimal'){ %>
                            <?=$this->Form->input('<%= $field %>',['prepend' => 'R$', 'type' => 'text', 'mask' => 'money', 'class'=>'form-control']); ?>
                            <% }else{ %>
                            <?=$this->Form->input('<%= $field %>', ['class'=>'form-control']); ?>
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
                        <div class='col-6 no-padding'>
                            <?php echo $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>, 'class'=>'form-control']); ?>
                        </div>
                        <%
                            }
                            }
                            %>
                        <div class="col-12 no-padding text-right mt-20">
                            <?= $this->Form->button(__('Salvar'),['type'=>'submit', 'class'=>'btn btn-primary mr-2']) ?>
                            <?= $this->Form->button(__('Cancelar'), ['class'=>'btn btn-light', 'onclick'=>'verifyCancel(event)'])?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>