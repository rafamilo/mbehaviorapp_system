
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Block Invoices</h2>
        <ol class="breadcrumb">
            <li>Block Invoices</li>
            <li class="active">
                <strong>Litagem de Block Invoices</strong>
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
                        <h3>Detalhes Block Invoices</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Block') ?></th>
                                                                <td><?= $blockInvoice->has('block') ? $this->Html->link($blockInvoice->block->name, ['controller' => 'Blocks', 'action' => 'view', $blockInvoice->block->id]) : '' ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Invoice Plan') ?></th>
                                                                <td><?= $blockInvoice->has('invoice_plan') ? $this->Html->link($blockInvoice->invoice_plan->name, ['controller' => 'InvoicePlans', 'action' => 'view', $blockInvoice->invoice_plan->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Payment Status') ?></th>
                                <td><?= h($blockInvoice->payment_status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($blockInvoice->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($blockInvoice->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Value') ?></th>
                                <td><?= $this->Number->format($blockInvoice->value) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($blockInvoice->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($blockInvoice->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Issue Date') ?></th>
                                                                <td><?= h($blockInvoice->issue_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Expiration Date') ?></th>
                                                                <td><?= h($blockInvoice->expiration_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Reference Date') ?></th>
                                                                <td><?= h($blockInvoice->reference_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($blockInvoice->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($blockInvoice->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


