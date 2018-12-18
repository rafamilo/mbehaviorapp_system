<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Bills To Receive
                    </h2>
                    <strong>
                        <?= __('Listar Bills To Receive') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="billsToReceive" class="form card-body">
                    <?= $this->Form->create($billsToReceive) ?>
                    <div class="col-12 no-padding row">
                                                <div class='col-6'>
                                                        <?=$this->Form->input('invoice_plan_id', ['data'=>'select','controller'=>'invoicePlans','action'=>'fill','data-value'=>$billsToReceive->invoice_plan_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('value',['prepend' => [$this->Form->button("<i class='fa fa-usd no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])], 'type' => 'text', 'mask' => 'money', 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('issue_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($billsToReceive->issue_date,'d/m/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('expiration_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($billsToReceive->expiration_date,'d/m/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('reference_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($billsToReceive->reference_date,'d/m/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('payment_status', ['class'=>'form-control']); ?>
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
                <div id="billsToReceive" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        Bills To Receive
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar Bills To Receive', ['action' => 'add'],['title'=>'Cadastrar Bills To Receive','class'=>'btn btn-primary','escape' => false]) ?>
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
                                        <?= $this->Paginator->sort('user_id') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('invoice_plan_id') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('value') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('issue_date') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('expiration_date') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('reference_date') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('payment_status') ?>
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
                                                                        <th class="actions">
                                        <?= __('Ações') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($billsToReceive as $billsToReceive): ?>
                                <tr>
                                                                        <td>
                                        <?= h($billsToReceive->id) ?>
                                    </td>
                                                                        <td>
                                        <?= $billsToReceive->has('user') ? $this->Html->link($billsToReceive->user->name, ['controller' => 'Users', 'action' => 'view', $billsToReceive->user->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= $billsToReceive->has('invoice_plan') ? $this->Html->link($billsToReceive->invoice_plan->name, ['controller' => 'InvoicePlans', 'action' => 'view', $billsToReceive->invoice_plan->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= h($billsToReceive->value) ?>
                                    </td>
                                                                        <td>
                                        <?= h($billsToReceive->issue_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($billsToReceive->expiration_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($billsToReceive->reference_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($billsToReceive->payment_status) ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($billsToReceive->created, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($billsToReceive->updated, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= $billsToReceive->virtualCreatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= $billsToReceive->virtualUpdatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= h($billsToReceive->status) ?>
                                    </td>
                                                                        <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'billsToReceive','action' => 'view', $billsToReceive->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'billsToReceive','action' => 'edit', $billsToReceive->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'billsToReceive','action'=>'delete', $billsToReceive->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
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
