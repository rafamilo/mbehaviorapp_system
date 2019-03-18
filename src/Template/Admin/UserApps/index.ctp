<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        User Apps
                    </h2>
                    <strong>
                        <?= __('Listar User App') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="userApps" class="form card-body">
                    <?= $this->Form->create($userApps) ?>
                    <div class="col-12 no-padding row">
                                                <div class='col-6'>
                                                        <?=$this->Form->input('name', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('usage_time', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('last_usage_time', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('usage_in_this_session', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('created_by', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('updated_by', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('status', ['class'=>'form-control']); ?>
                                                    </div>
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
                <div id="userApps" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        User Apps
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar User App', ['action' => 'add'],['title'=>'Cadastrar User App','class'=>'btn btn-primary','escape' => false]) ?>
                                    </p>
                                </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                                                        <th>
                                        <?= $this->Paginator->sort('id') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('name') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('usage_time') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('last_usage_time') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('usage_in_this_session') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('created',['label'=>'Dt. Criação']) ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('updated',['label'=>'Dt. Atualizacao']) ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('created_by',['label'=>'Cadastrado por']) ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('updated_by',['label'=>'Atualizador por']) ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('status') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('user_id') ?>
                                    </th>
                                                                        <th class="actions">
                                        <?= __('Ações') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($userApps as $userApp): ?>
                                <tr>
                                                                        <td>
                                        <?= h($userApp->id) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userApp->name) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userApp->usage_time) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userApp->last_usage_time) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userApp->usage_in_this_session) ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($userApp->created, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($userApp->updated, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= $userApp->virtualCreatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= $userApp->virtualUpdatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= h($userApp->status) ?>
                                    </td>
                                                                        <td>
                                        <?= $userApp->has('user') ? $this->Html->link($userApp->user->name, ['controller' => 'Users', 'action' => 'view', $userApp->user->id]) : '' ?>
                                    </td>
                                                                        <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'userApps','action' => 'view', $userApp->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'userApps','action' => 'edit', $userApp->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'userApps','action'=>'delete', $userApp->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
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
