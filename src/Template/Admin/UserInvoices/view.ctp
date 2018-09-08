
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>User Invoices</h2>
        <ol class="breadcrumb">
            <li>User Invoices</li>
            <li class="active">
                <strong>Litagem de User Invoices</strong>
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
                        <h3>Detalhes User Invoices</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $userInvoice->has('user') ? $this->Html->link($userInvoice->user->name, ['controller' => 'Users', 'action' => 'view', $userInvoice->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Apartment') ?></th>
                                                                <td><?= $userInvoice->has('apartment') ? $this->Html->link($userInvoice->apartment->name, ['controller' => 'Apartments', 'action' => 'view', $userInvoice->apartment->id]) : '' ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Invoice Plan') ?></th>
                                                                <td><?= $userInvoice->has('invoice_plan') ? $this->Html->link($userInvoice->invoice_plan->name, ['controller' => 'InvoicePlans', 'action' => 'view', $userInvoice->invoice_plan->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Payment Status') ?></th>
                                <td><?= h($userInvoice->payment_status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($userInvoice->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($userInvoice->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Value') ?></th>
                                <td><?= $this->Number->format($userInvoice->value) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($userInvoice->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($userInvoice->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Issue Date') ?></th>
                                                                <td><?= h($userInvoice->issue_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Expiration Date') ?></th>
                                                                <td><?= h($userInvoice->expiration_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Reference Date') ?></th>
                                                                <td><?= h($userInvoice->reference_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($userInvoice->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($userInvoice->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


