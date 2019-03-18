<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        User Statistics
                    </h2>
                    <strong>
                        <?= __('Listar User Statistic') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="userStatistics" class="form card-body">
                    <?= $this->Form->create($userStatistics) ?>
                    <div class="col-12 no-padding row">
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_brand', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_carrier', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_model', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_number', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_manufacturer', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('system_name', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('system_version', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('timezone', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('battery_level', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('ip', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('user_agent', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('air_plane_mode_on', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('is_emulator', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('is_tablet', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('is_landscape', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('device_type', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('connection_type', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('connection_effective_type', ['class'=>'form-control']); ?>
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
                <div id="userStatistics" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        User Statistics
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar User Statistic', ['action' => 'add'],['title'=>'Cadastrar User Statistic','class'=>'btn btn-primary','escape' => false]) ?>
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
                                        <?= $this->Paginator->sort('phone_brand') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('phone_carrier') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('phone_model') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('phone_number') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('phone_manufacturer') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('system_name') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('system_version') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('timezone') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('battery_level') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('ip') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('user_agent') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('air_plane_mode_on') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('is_emulator') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('is_tablet') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('is_landscape') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('device_type') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('connection_type') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('connection_effective_type') ?>
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
                                <?php foreach ($userStatistics as $userStatistic): ?>
                                <tr>
                                                                        <td>
                                        <?= h($userStatistic->id) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->phone_brand) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->phone_carrier) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->phone_model) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->phone_number) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->phone_manufacturer) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->system_name) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->system_version) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->timezone) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->battery_level) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->ip) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->user_agent) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->air_plane_mode_on) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->is_emulator) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->is_tablet) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->is_landscape) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->device_type) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->connection_type) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->connection_effective_type) ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($userStatistic->created, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($userStatistic->updated, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= $userStatistic->virtualCreatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= $userStatistic->virtualUpdatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= h($userStatistic->status) ?>
                                    </td>
                                                                        <td>
                                        <?= $userStatistic->has('user') ? $this->Html->link($userStatistic->user->name, ['controller' => 'Users', 'action' => 'view', $userStatistic->user->id]) : '' ?>
                                    </td>
                                                                        <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'userStatistics','action' => 'view', $userStatistic->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'userStatistics','action' => 'edit', $userStatistic->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'userStatistics','action'=>'delete', $userStatistic->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
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
