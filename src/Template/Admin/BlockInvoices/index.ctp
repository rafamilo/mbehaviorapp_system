<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Block Invoices
                    </h2>
                    <strong>
                        <?= __('Listar Block Invoice') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="blockInvoices" class="form card-body">
                    <?= $this->Form->create($blockInvoices) ?>
                    <div class="col-12 no-padding row">
                                                <div class='col-6'>
                                                        <?=$this->Form->input('block_id', ['data'=>'select','controller'=>'blocks','action'=>'fill','data-value'=>$blockInvoices->block_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('invoice_plan_id', ['data'=>'select','controller'=>'invoicePlans','action'=>'fill','data-value'=>$blockInvoices->invoice_plan_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('value',['prepend' => [$this->Form->button("<i class='fa fa-usd no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])], 'type' => 'text', 'mask' => 'money', 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('issue_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($blockInvoices->issue_date,'d/m/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('expiration_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($blockInvoices->expiration_date,'d/m/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('reference_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($blockInvoices->reference_date,'d/m/Y'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]); ?>
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
                <div id="blockInvoices" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        Block Invoices
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar Block Invoice', ['action' => 'add'],['title'=>'Cadastrar Block Invoice','class'=>'btn btn-primary','escape' => false]) ?>
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
                                        <?= $this->Paginator->sort('block_id') ?>
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
                                <?php foreach ($blockInvoices as $blockInvoice): ?>
                                <tr>
                                                                        <td>
                                        <?= h($blockInvoice->id) ?>
                                    </td>
                                                                        <td>
                                        <?= $blockInvoice->has('block') ? $this->Html->link($blockInvoice->block->name, ['controller' => 'Blocks', 'action' => 'view', $blockInvoice->block->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= $blockInvoice->has('invoice_plan') ? $this->Html->link($blockInvoice->invoice_plan->name, ['controller' => 'InvoicePlans', 'action' => 'view', $blockInvoice->invoice_plan->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= h($blockInvoice->value) ?>
                                    </td>
                                                                        <td>
                                        <?= h($blockInvoice->issue_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($blockInvoice->expiration_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($blockInvoice->reference_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($blockInvoice->payment_status) ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($blockInvoice->created, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= date_format($blockInvoice->updated, 'd/m/Y H:m') ?>
                                    </td>
                                                                        <td>
                                        <?= $blockInvoice->virtualCreatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= $blockInvoice->virtualUpdatedBy ?>
                                    </td>
                                                                        <td>
                                        <?= h($blockInvoice->status) ?>
                                    </td>
                                                                        <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'blockInvoices','action' => 'view', $blockInvoice->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'blockInvoices','action' => 'edit', $blockInvoice->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'blockInvoices','action'=>'delete', $blockInvoice->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
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
