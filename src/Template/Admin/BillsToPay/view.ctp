
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Bills To Pay</h2>
        <ol class="breadcrumb">
            <li>Bills To Pay</li>
            <li class="active">
                <strong>Litagem de Bills To Pay</strong>
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
                        <h3>Detalhes Bills To Pay</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $billsToPay->has('user') ? $this->Html->link($billsToPay->user->name, ['controller' => 'Users', 'action' => 'view', $billsToPay->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Invoice Plan') ?></th>
                                                                <td><?= $billsToPay->has('invoice_plan') ? $this->Html->link($billsToPay->invoice_plan->name, ['controller' => 'InvoicePlans', 'action' => 'view', $billsToPay->invoice_plan->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Payment Status') ?></th>
                                <td><?= h($billsToPay->payment_status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($billsToPay->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($billsToPay->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Value') ?></th>
                                <td><?= $this->Number->format($billsToPay->value) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($billsToPay->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($billsToPay->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Issue Date') ?></th>
                                                                <td><?= h($billsToPay->issue_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Expiration Date') ?></th>
                                                                <td><?= h($billsToPay->expiration_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Reference Date') ?></th>
                                                                <td><?= h($billsToPay->reference_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($billsToPay->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($billsToPay->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


