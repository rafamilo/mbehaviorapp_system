
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Bills To Receive</h2>
        <ol class="breadcrumb">
            <li>Bills To Receive</li>
            <li class="active">
                <strong>Litagem de Bills To Receive</strong>
            </li>
        </ol>
    </div>
    <div class="clearfix"></div>
</div>
<div class="area">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="table-responsive">
                        <h3>Detalhes Bills To Receive</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $billsToReceive->has('user') ? $this->Html->link($billsToReceive->user->name, ['controller' => 'Users', 'action' => 'view', $billsToReceive->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Invoice Plan') ?></th>
                                                                <td><?= $billsToReceive->has('invoice_plan') ? $this->Html->link($billsToReceive->invoice_plan->name, ['controller' => 'InvoicePlans', 'action' => 'view', $billsToReceive->invoice_plan->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Payment Status') ?></th>
                                <td><?= h($billsToReceive->payment_status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($billsToReceive->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($billsToReceive->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Value') ?></th>
                                <td><?= $this->Number->format($billsToReceive->value) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($billsToReceive->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($billsToReceive->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Issue Date') ?></th>
                                                                <td><?= h($billsToReceive->issue_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Expiration Date') ?></th>
                                                                <td><?= h($billsToReceive->expiration_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Reference Date') ?></th>
                                                                <td><?= h($billsToReceive->reference_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($billsToReceive->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($billsToReceive->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


