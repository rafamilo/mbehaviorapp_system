<%

use Cake\Utility\Inflector;

$fields = collection($fields)
->filter(function($field) use ($schema) {
return !in_array($schema->columnType($field), ['binary', 'text']);
});

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
$fields = $fields->reject(function ($field) {
return $field === 'lft' || $field === 'rght';
});
}

if (!empty($indexColumns)) {
$fields = $fields->take($indexColumns);
}
if($pluralHumanName=='Users'){
%>
<nav>
    <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label"><%= $pluralHumanName %></span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='<%= $pluralHumanName %>' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar <%= $pluralHumanName %>', ['controller'=>'<%= $pluralHumanName %>','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar <%= $pluralHumanName %>', ['controller'=>'<%= $pluralHumanName %>','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#<%= $pluralHumanName %>' aria-expanded="false" aria-controls='<%= $pluralHumanName %>'>
            <i class="fa fa-th-large"></i><span class="nav-label"><%= $this->_pluralHumanName($pluralHumanName) %></span><span class="fa arrow"></span></a>

        <div id="<%= $pluralHumanName %>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'<%= $pluralHumanName %>','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'<%= $pluralHumanName %>','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>
    <%
    $done = [];
    foreach ($associations as $type => $data):
    foreach ($data as $alias => $details):
    if (!empty($details['navLink']) && $details['controller'] !== $this->name && !in_array($details['controller'], $done)):
    %>
    <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label"><%= $this->_pluralHumanName($alias) %></span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='<%= $details["controller"] %>' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar <%= $this->_pluralHumanName($alias) %>', ['controller'=>'<%= $details["controller"] %>','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar <%= $this->_pluralHumanName($alias) %>', ['controller'=>'<%= $details["controller"] %>','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#<%= $details["controller"] %>' aria-expanded="false" aria-controls='<%= $details["controller"] %>'>
            <i class="fa fa-th-large"></i><span class="nav-label"><%= $this->_pluralHumanName($alias) %></span><span class="fa arrow"></span></a>

        <div id="<%= $details['controller'] %>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'<%= $details["controller"] %>','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'<%= $details["controller"] %>','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>

    <%
    $done[] = $details['controller'];
    endif;
    endforeach;
    endforeach;
    %>
</nav>
<%
}
$name_form = str_replace(' ','',$singularHumanName);
%>
<div class="this-place">
    <div class="wrapper white-bg page-heading">
        <div class="col-lg-9">
            <h2><%= $pluralHumanName %></h2>
            <ol class="breadcrumb">
                <li><%= $pluralHumanName %></li>
                <li class="active">
                    <strong>Listagem de <%= $pluralHumanName %></strong>
                </li>
            </ol>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="area">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Filtros</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="filtros">
                            <?= $this->Form->create('<%= $name_form %>',['type'=>'get']) ?>
                            <%
                            $name = str_replace(' ','',$pluralHumanName);
                            foreach ($fields as $field) {
                            if (in_array($field, $primaryKey)) {
                                continue;
                            }
                            if (isset($keyFields[$field])) {
                                $fieldData = $schema->column($field);
                                $table = $keyFields[$field];
                                if(!in_array($field,['situacao_id','user_id','user_up_id'])) {
                                    if (!empty($fieldData['null'])) { %>
                                        <div class='col-md-4'>
                                            <?= $this->Form->input('<%= $field %>', ['name'=>'<%=$name%>__<%= $field %>','data'=>'select','controller'=>'<%= $table %>','action'=>'fill', 'empty' => 'Selecione']); ?>
                                        </div>
                                        <% } else { %>
                                            <div class='col-md-4'>
                                                <?= $this->Form->input('<%= $field %>', ['name'=>'<%=$name%>__<%= $field %>','data'=>'select','controller'=>'<%= $table %>','action'=>'fill', 'empty' => 'Selecione']); ?>
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
                                        <div class='col-md-4'>
                                            <?= $this->Form->input('<%= $field %>', ['name'=>'<%=$name%>__<%= $field %>','empty' => true,'type'=>'text','class'=>'datepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                        </div>
                                        <% }elseif($fieldData['type'] === 'datetime'){ %>
                                            <div class='col-md-4'>
                                                <?= $this->Form->input('<%= $field %>', ['name'=>'<%=$name%>__<%= $field %>','empty' => true,'type'=>'text','class'=>'datetimepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                            </div>
                                        <% }else{ %>
                                            <div class='col-md-4'>
                                                <?= $this->Form->input('<%= $field %>', ['name'=>'<%=$name%>__<%= $field %>','empty' => true]); ?>
                                            </div>
                                        <% }
                                } else {
                                    if($fieldData['type'] === 'date') { %>
                                        <div class='col-md-4'>
                                            <?= $this->Form->input('<%= $field %>', ['name'=>'<%=$name%>__<%= $field %>','type' => 'text', 'class' => 'datepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                        </div>
                                        <% }elseif($fieldData['type'] === 'datetime'){ %>
                                        <div class='col-md-4'>
                                            <?= $this->Form->input('<%= $field %>', ['name'=>'<%=$name%>__<%= $field %>','type' => 'text', 'class' => 'datetimepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                        </div>
                                        <% }else{ %>
                                        <div class='col-md-4'>
                                            <% if($fieldData['type'] === 'decimal'){ %>
                                                <?=$this->Form->input('<%= $field %>',['name'=>'<%=$name%>__<%= $field %>','prepend' => 'R$', 'type' => 'text', 'mask' => 'money']); ?>
                                                <% }else{ %>
                                                <?=$this->Form->input('<%= $field %>',['name'=>'<%=$name%>__<%= $field %>']); ?>
                                            <% } %>
                                        </div>
                            <% }
                                    }
                                }
                            }
                            if (!empty($associations['BelongsToMany'])) {
                                foreach ($associations['BelongsToMany'] as $assocName => $assocData) { %>
                                    <div class='col-md-4'>
                                        <?= $this->Form->input('<%= $assocData['property'] %>._ids', ['name'=>'<%=$name%>__<%=$assocData['property'] %>','options' => $<%= $assocData['variable'] %>]); ?>
                                    </div>
                            <%
                                }
                            }
                            %>
                            <div class="clearfix"></div>
                            <div class="col-md-4">
                                <?= $this->Form->button($this->Html->icon('search'), ['type'=>'button','id'=>'btn-fill','class' => 'btn btn-default','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Pesquisar','escape' => false]) ?>
                                <?= $this->Form->button($this->Html->icon('refresh'), ['type'=>'button','id'=>'btn-refresh','class' => 'btn btn-default','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Limpar Filtros','escape' => false]) ?>
                            </div>
                            <div class="clearfix"></div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
                <div class="text-right btnAdd">
                    <p>
                        <?= $this->Html->link($this->Html->icon('plus').' Cadastrar <%= $pluralHumanName %>', ['action' => 'add'],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Cadastrar <%= $pluralHumanName %>','class'=>'btn btn-primary','escape' => false]) ?>
                    </p>
                </div>

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?= __('<%= $pluralHumanName %>') ?></h5>
                    </div>
                    <div class="ibox-content">
                        <div class="clearfix">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <% foreach ($fields as $field):
                                        if($field=='created'){ %>
                                        <th><?= $this->Paginator->sort('<%= $field %>',['label'=>'Dt. Criação']) ?></th>
                                        <% }else if($field=='user_up_id'){ %>
                                        <th><?= $this->Paginator->sort('<%= $field %>',['label'=>'Quem Modificou']) ?></th>
                                        <% }else if($field=='user_id'){ %>
                                        <th><?= $this->Paginator->sort('<%= $field %>',['label'=>'Quem Cadastrou']) ?></th>
                                        <% }else if($field=='modified'){ %>
                                        <th><?= $this->Paginator->sort('<%= $field %>',['label'=>'Dt. Modificação']) ?></th>
                                        <% }else{ %>
                                        <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
                                        <% } endforeach; %>
                                        <th class="actions"><?= __('Ações') ?></th>
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
                                        <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
                                        <%
                                        break;
                                        }
                                        }
                                        }
                                        if ($isKey !== true) {
                                        if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
                                        %>
                                        <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
                                        <%
                                        } else {
                                        %>
                                        <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
                                        <%
                                        }
                                        }
                                        }

                                        $pk = '$' . $singularVar . '->' . $primaryKey[0];
                                        %>
                                        <td class="actions">
                                            <?= $this->Html->link($this->Html->icon('list-alt'), ['controller'=>'<%=$pluralVar%>','action' => 'view', <%= $pk %>],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                    <?= $this->Html->link($this->Html->icon('pencil'), ['controller'=>'<%=$pluralVar%>','action' => 'edit', <%= $pk %>],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                   <?= $this->Html->link($this->Html->icon('remove'),  ['controller'=>'<%=$pluralVar%>','action'=>'delete', <%= $pk %>],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger','listen' => 'f']) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <div class="paginator">
                                        <ul class="pagination">
                                            <?= $this->Paginator->prev($this->Html->icon('chevron-left'),['escape' => false]) ?>
                                            <?= $this->Paginator->numbers() ?>
                                            <?= $this->Paginator->next($this->Html->icon('chevron-right'),['escape' => false]) ?>
                                        </ul>
                                        <p><?= $this->Paginator->counter('Página {{page}} de {{pages}}') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
