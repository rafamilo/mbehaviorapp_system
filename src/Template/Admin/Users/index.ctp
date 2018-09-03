<nav>
    <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label">Users</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='Users' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar Users', ['controller'=>'Users','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar Users', ['controller'=>'Users','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#Users' aria-expanded="false" aria-controls='Users'>
            <i class="fa fa-th-large"></i><span class="nav-label">Users</span><span class="fa arrow"></span></a>

        <div id="Users" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'Users','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'Users','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>
        <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label">User Types</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='UserTypes' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar User Types', ['controller'=>'UserTypes','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar User Types', ['controller'=>'UserTypes','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#UserTypes' aria-expanded="false" aria-controls='UserTypes'>
            <i class="fa fa-th-large"></i><span class="nav-label">User Types</span><span class="fa arrow"></span></a>

        <div id="UserTypes" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'UserTypes','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'UserTypes','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>

        <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label">Announcements</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='Announcements' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar Announcements', ['controller'=>'Announcements','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar Announcements', ['controller'=>'Announcements','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#Announcements' aria-expanded="false" aria-controls='Announcements'>
            <i class="fa fa-th-large"></i><span class="nav-label">Announcements</span><span class="fa arrow"></span></a>

        <div id="Announcements" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'Announcements','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'Announcements','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>

        <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label">Party Hall Schedules</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='PartyHallSchedules' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar Party Hall Schedules', ['controller'=>'PartyHallSchedules','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar Party Hall Schedules', ['controller'=>'PartyHallSchedules','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#PartyHallSchedules' aria-expanded="false" aria-controls='PartyHallSchedules'>
            <i class="fa fa-th-large"></i><span class="nav-label">Party Hall Schedules</span><span class="fa arrow"></span></a>

        <div id="PartyHallSchedules" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'PartyHallSchedules','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'PartyHallSchedules','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>

        <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label">User Invoices</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='UserInvoices' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar User Invoices', ['controller'=>'UserInvoices','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar User Invoices', ['controller'=>'UserInvoices','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#UserInvoices' aria-expanded="false" aria-controls='UserInvoices'>
            <i class="fa fa-th-large"></i><span class="nav-label">User Invoices</span><span class="fa arrow"></span></a>

        <div id="UserInvoices" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'UserInvoices','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'UserInvoices','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>

        <li>
        <a href="#"><i class="fa fa-thumb-tack"></i><span class="nav-label">User Phones</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li <?= $this->fetch('title')=='UserPhones' ? 'class="active"' : ''; ?>>
                <?= $this->Html->link('<i class="fa fa-th-large"></i> Listar User Phones', ['controller'=>'UserPhones','action' => 'index'],['escape' => false]) ?>
                <?= $this->Html->link('<i class="fa fa-plus"></i> Cadastrar User Phones', ['controller'=>'UserPhones','action' => 'add'],['escape' => false]) ?>
            </li>
        </ul>
    </li>
    <li>
        <a class="collapsed" role="button" data-toggle="collapse" data-list="collapse" href='#UserPhones' aria-expanded="false" aria-controls='UserPhones'>
            <i class="fa fa-th-large"></i><span class="nav-label">User Phones</span><span class="fa arrow"></span></a>

        <div id="UserPhones" class="panel-collapse collapse" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="false" style="height: 0px;">
            <ul class="nav nav-second-level">
                <li><?= $this->Html->link('<i class="fa fa-th-large"></i> Listar', ['controller'=>'UserPhones','action' => 'index'],['escape' => false]); ?></li>
                <li><?= $this->Html->link('<i class="fa fa-plus-square"></i> Cadastrar', ['controller'=>'UserPhones','action' => 'add'],['escape' => false]); ?></li>
            </ul>
        </div>
    </li>

    </nav>
<div class="this-place">
    <div class="wrapper white-bg page-heading">
        <div class="col-lg-9">
            <h2>Users</h2>
            <ol class="breadcrumb">
                <li>Users</li>
                <li class="active">
                    <strong>Listagem de Users</strong>
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
                            <?= $this->Form->create('User',['type'=>'get']) ?>
                                                                    <div class='col-md-4'>
                                                                                            <?=$this->Form->input('name',['name'=>'Users__name']); ?>
                                                                                    </div>
                                                                        <div class='col-md-4'>
                                                <?= $this->Form->input('user_type_id', ['name'=>'Users__user_type_id','data'=>'select','controller'=>'userTypes','action'=>'fill', 'empty' => 'Selecione']); ?>
                                            </div>
                                                                                <div class='col-md-4'>
                                            <?= $this->Form->input('birthdate', ['name'=>'Users__birthdate','type' => 'text', 'class' => 'datetimepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]); ?>
                                        </div>
                                                                                <div class='col-md-4'>
                                                                                            <?=$this->Form->input('cpf',['name'=>'Users__cpf']); ?>
                                                                                    </div>
                                                                    <div class='col-md-4'>
                                                                                            <?=$this->Form->input('rg',['name'=>'Users__rg']); ?>
                                                                                    </div>
                                                                    <div class='col-md-4'>
                                                                                            <?=$this->Form->input('email',['name'=>'Users__email']); ?>
                                                                                    </div>
                                                                    <div class='col-md-4'>
                                                                                            <?=$this->Form->input('answerable',['name'=>'Users__answerable']); ?>
                                                                                    </div>
                                                                    <div class='col-md-4'>
                                                                                            <?=$this->Form->input('created_by',['name'=>'Users__created_by']); ?>
                                                                                    </div>
                                                                    <div class='col-md-4'>
                                                                                            <?=$this->Form->input('updated_by',['name'=>'Users__updated_by']); ?>
                                                                                    </div>
                                                                    <div class='col-md-4'>
                                                                                            <?=$this->Form->input('status',['name'=>'Users__status']); ?>
                                                                                    </div>
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
                        <?= $this->Html->link($this->Html->icon('plus').' Cadastrar Users', ['action' => 'add'],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Cadastrar Users','class'=>'btn btn-primary','escape' => false]) ?>
                    </p>
                </div>

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5><?= __('Users') ?></h5>
                    </div>
                    <div class="ibox-content">
                        <div class="clearfix">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                                                                <th><?= $this->Paginator->sort('id') ?></th>
                                                                                <th><?= $this->Paginator->sort('name') ?></th>
                                                                                <th><?= $this->Paginator->sort('user_type_id') ?></th>
                                                                                <th><?= $this->Paginator->sort('birthdate') ?></th>
                                                                                <th><?= $this->Paginator->sort('cpf') ?></th>
                                                                                <th><?= $this->Paginator->sort('rg') ?></th>
                                                                                <th><?= $this->Paginator->sort('email') ?></th>
                                                                                <th><?= $this->Paginator->sort('answerable') ?></th>
                                                                                <th><?= $this->Paginator->sort('created',['label'=>'Dt. Criação']) ?></th>
                                                                                <th><?= $this->Paginator->sort('updated') ?></th>
                                                                                <th><?= $this->Paginator->sort('created_by') ?></th>
                                                                                <th><?= $this->Paginator->sort('updated_by') ?></th>
                                                                                <th><?= $this->Paginator->sort('status') ?></th>
                                                                                <th class="actions"><?= __('Ações') ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($users as $user): ?>
                                    <tr>
                                                                                <td><?= $this->Number->format($user->id) ?></td>
                                                                                <td><?= h($user->name) ?></td>
                                                                                <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
                                                                                <td><?= h($user->birthdate) ?></td>
                                                                                <td><?= $this->Number->format($user->cpf) ?></td>
                                                                                <td><?= $this->Number->format($user->rg) ?></td>
                                                                                <td><?= h($user->email) ?></td>
                                                                                <td><?= $this->Number->format($user->answerable) ?></td>
                                                                                <td><?= h($user->created) ?></td>
                                                                                <td><?= h($user->updated) ?></td>
                                                                                <td><?= $this->Number->format($user->created_by) ?></td>
                                                                                <td><?= $this->Number->format($user->updated_by) ?></td>
                                                                                <td><?= h($user->status) ?></td>
                                                                                <td class="actions">
                                            <?= $this->Html->link($this->Html->icon('list-alt'), ['controller'=>'users','action' => 'view', $user->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                    <?= $this->Html->link($this->Html->icon('pencil'), ['controller'=>'users','action' => 'edit', $user->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                   <?= $this->Html->link($this->Html->icon('remove'),  ['controller'=>'users','action'=>'delete', $user->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger','listen' => 'f']) ?>
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
