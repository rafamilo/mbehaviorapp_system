<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        User Invoices
                    </h2>
                    <strong>
                        <?= __('Listar User Invoice') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="userInvoices" class="form card-body">
                    <?= $this->Form->create($userInvoices) ?>
                    <div class="col-12 no-padding row">
                                                <div class='col-6'>
                                                        <?=$this->Form->input('apartment_id', ['data'=>'select','controller'=>'apartments','action'=>'fill','data-value'=>$userInvoices->apartment_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('invoice_plan_id', ['data'=>'select','controller'=>'invoicePlans','action'=>'fill','data-value'=>$userInvoices->invoice_plan_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('value',['prepend' => [$this->Form->button("<i class='fa fa-usd no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])], 'type' => 'text', 'mask' => 'money', 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                            <?php                                                 echo $this->Form->input('issue_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($userInvoices->issue_date,'dd/MM/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                         ?>
                        </div>
                                                <div class='col-6'>
                            <?php                                                 echo $this->Form->input('expiration_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($userInvoices->expiration_date,'dd/MM/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                         ?>
                        </div>
                                                <div class='col-6'>
                            <?php                                                 echo $this->Form->input('reference_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($userInvoices->reference_date,'dd/MM/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                         ?>
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
                <div id="userInvoices" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        User Invoices
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar User Invoice', ['action' => 'add'],['title'=>'Cadastrar User Invoice','class'=>'btn btn-primary','escape' => false]) ?>
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
                                        <?= $this->Paginator->sort('apartment_id') ?>
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
                                <?php foreach ($userInvoices as $userInvoice): ?>
                                <tr>
                                                                        <td>
                                        <?= $this->Number->format($userInvoice->id) ?>
                                    </td>
                                                                        <td>
                                        <?= $userInvoice->has('user') ? $this->Html->link($userInvoice->user->name, ['controller' => 'Users', 'action' => 'view', $userInvoice->user->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= $userInvoice->has('apartment') ? $this->Html->link($userInvoice->apartment->name, ['controller' => 'Apartments', 'action' => 'view', $userInvoice->apartment->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= $userInvoice->has('invoice_plan') ? $this->Html->link($userInvoice->invoice_plan->name, ['controller' => 'InvoicePlans', 'action' => 'view', $userInvoice->invoice_plan->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($userInvoice->value) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userInvoice->issue_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userInvoice->expiration_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userInvoice->reference_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userInvoice->payment_status) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userInvoice->created) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userInvoice->updated) ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($userInvoice->created_by) ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($userInvoice->updated_by) ?>
                                    </td>
                                                                        <td>
                                        <?= h($userInvoice->status) ?>
                                    </td>
                                                                        <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'userInvoices','action' => 'view', $userInvoice->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'userInvoices','action' => 'edit', $userInvoice->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'userInvoices','action'=>'delete', $userInvoice->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
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
