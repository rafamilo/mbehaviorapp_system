<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        User Phones
                    </h2>
                    <strong>
                        <?= __('Listar User Phone') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="userPhones" class="form card-body">
                    <?= $this->Form->create($userPhones) ?>
                    <div class="col-12 no-padding row">
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_type_id', ['data'=>'select','controller'=>'phoneTypes','action'=>'fill','data-value'=>$userPhones->phone_type_id, 'class'=>'form-control']); ?>
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
                <div id="userPhones" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        User Phones
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar User Phone', ['action' => 'add'],['title'=>'Cadastrar User Phone','class'=>'btn btn-primary','escape' => false]) ?>
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
                                        <?= $this->Paginator->sort('user_id',['label'=>'Quem Cadastrou']) ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('phone') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('phone_type_id') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('created',['label'=>'Dt. Criação']) ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('updated') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('created_by') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('updated_by') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('status') ?>
                                    </th>
                                                                        <th class="actions">
                                        <?= __('Ações') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($userPhones as $userPhone): ?>
                                <tr>
                                                                        <td>
                                        <?= $this->Number->format($userPhone->id) ?>
                                    </td>
                                                                        <td>
                                        <?= $userPhone->has('user') ? $this->Html->link($userPhone->user->name, ['controller' => 'Users', 'action' => 'view', $userPhone->user->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($userPhone->phone) ?>
                                    </td>
                                                                        <td>
                                        <?= $userPhone->has('phone_type') ? $this->Html->link($userPhone->phone_type->name, ['controller' => 'PhoneTypes', 'action' => 'view', $userPhone->phone_type->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= h($userPhone->created) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userPhone->updated) ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($userPhone->created_by) ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($userPhone->updated_by) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userPhone->status) ?>
                                    </td>
                                                                        <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'userPhones','action' => 'view', $userPhone->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'userPhones','action' => 'edit', $userPhone->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'userPhones','action'=>'delete', $userPhone->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
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
