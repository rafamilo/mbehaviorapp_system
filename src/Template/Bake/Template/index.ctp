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
                        <?= __('Listar <%= $singularHumanName %>') ?>
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
                    <?= $this->Form->create($<%= $pluralVar %>) ?>
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
                        <div class='col-6'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $pluralVar %>-><%= $field %>, 'empty' => 'selecione', 'class'=>'form-control']); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill',  'empty' => 'selecione', 'class'=>'form-control']); ?>
                            <% endif; %>
                        </div>
                        <% } else { %>
                        <div class='col-6'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['data'=>'select','controller'=>'<%= $keyFields[$field] %>','action'=>'fill','data-value'=>$<%= $pluralVar %>-><%= $field %>, 'class'=>'form-control']); ?>
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
                        <div class='col-6'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control','value'=>$this->Time->format($<%= $pluralVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                            <% endif; %>
                        </div>
                        <% }elseif($fieldData['type'] === 'datetime'){ %>
                        <div class='col-6'>
                            <% if (strpos($action, 'add') === true): %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['empty' => true,'type'=>'text','class'=>'datepicker form-control','value'=>$this->Time->format($<%= $pluralVar %>-><%= $field %>,'dd/MM/Y HH:mm'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                            <% endif; %>
                        </div>
                        <% }else{ %>
                        <div class='col-6'>
                            <?= $this->Form->input('<%= $field %>', ['empty' => true, 'class'=>'form-control']); ?>
                        </div>
                        <%        }
                                    } else {
                                    if($fieldData['type'] === 'date') { %>
                        <div class='col-6'>
                            <% if (strpos($action, 'add') === false): %>
                            <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($<%= $pluralVar %>-><%= $field %>,'dd/MM/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                            <% else: %>
                            <?=$this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                            <% endif; %>
                        </div>
                        <% }elseif($fieldData['type'] === 'datetime'){ %>
                        <div class='col-6'>
                            <?php <% if (strpos($action, 'add') === false): %>
                                                echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($<%= $pluralVar %>-><%= $field %>,'dd/MM/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                        <% else: %>
                                                echo $this->Form->input('<%= $field %>', ['type' => 'text', 'class' => 'datepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                <% endif; %> ?>
                        </div>
                        <% }else{ %>
                        <div class='col-6'>
                            <% if($fieldData['type'] === 'decimal'){ %>
                            <?=$this->Form->input('<%= $field %>',['prepend' => [$this->Form->button("<i class='fa fa-usd no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])], 'type' => 'text', 'mask' => 'money', 'class'=>'form-control']); ?>
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
                        <div class='col-6'>
                            <?= $this->Form->input('<%= $assocData['property'] %>._ids', ['options' => $<%= $assocData['variable'] %>, 'class'=>'form-control']); ?>
                        </div>
                        <%
                                    }
                                    }
                                    %>
                        <div class="col-12 no-padding text-center mt-20">
                            <?= $this->Form->button("<i class='fa fa-search'></i>", ['type'=>'submit', 'class'=>'btn btn-light btn-icons mr-2', 'escape' => false]) ?>
                            <?= $this->Html->link("<i class='fa fa-refresh'></i>", [], ['title'=>'Limpar formulário', 'class'=>'btn btn-light btn-icons', 'escape' => false]) ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="<%= $pluralVar %>" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        <%= $pluralHumanName %>
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar <%= $singularHumanName %>', ['action' => 'add'],['title'=>'Cadastrar <%= $singularHumanName %>','class'=>'btn btn-primary','escape' => false]) ?>
                                    </p>
                                </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <% foreach ($fields as $field):
                                        if($field=='created'){ %>
                                    <th>
                                        <?= $this->Paginator->sort('<%= $field %>',['label'=>'Dt. Criação']) ?>
                                    </th>
                                    <% }else if($field=='user_up_id'){ %>
                                    <th>
                                        <?= $this->Paginator->sort('<%= $field %>',['label'=>'Quem Modificou']) ?>
                                    </th>
                                    <% }else if($field=='user_id'){ %>
                                    <th>
                                        <?= $this->Paginator->sort('<%= $field %>',['label'=>'Quem Cadastrou']) ?>
                                    </th>
                                    <% }else if($field=='modified'){ %>
                                    <th>
                                        <?= $this->Paginator->sort('<%= $field %>',['label'=>'Dt. Modificação']) ?>
                                    </th>
                                    <% }else{ %>
                                    <th>
                                        <?= $this->Paginator->sort('<%= $field %>') ?>
                                    </th>
                                    <% } endforeach; %>
                                    <th class="actions">
                                        <?= __('Ações') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
                                <tr>
                                    <%        foreach ($fields as $field) {
                                        $isKey = false;
                                        if (!empty($associations['BelongsTo'])) {
                                        foreach ($associations['BelongsTo'] as $alias => $details) {
                                        if ($field === $details['foreignKey']) {
                                        $isKey = true;
                                        %>
                                    <td>
                                        <?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?>
                                    </td>
                                    <%
                                        break;
                                        }
                                        }
                                        }
                                        if ($isKey !== true) {
                                        if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
                                        %>
                                    <td>
                                        <?= h($<%= $singularVar %>-><%= $field %>) ?>
                                    </td>
                                    <%
                                        } else {
                                        %>
                                    <td>
                                        <?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?>
                                    </td>
                                    <%
                                        }
                                        }
                                        }

                                        $pk = '$' . $singularVar . '->' . $primaryKey[0];
                                        %>
                                    <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'<%=$pluralVar%>','action' => 'view', <%= $pk %>],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'<%=$pluralVar%>','action' => 'edit', <%= $pk %>],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'<%=$pluralVar%>','action'=>'delete', <%= $pk %>],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <div class="paginator">
                                <ul class="pagination">
                                    <?= $this->Paginator->prev("<i class='fa fa-chevron-left'></i>",['escape' => false]) ?>
                                    <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next("<i class='fa fa-chevron-right'></i>",['escape' => false]) ?>
                                </ul>
                                <p>
                                    <?= $this->Paginator->counter('Página {{page}} de {{pages}}') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
