
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Invoice Plans</h2>
        <ol class="breadcrumb">
            <li>Invoice Plans</li>
            <li class="active">
                <strong>Litagem de Invoice Plans</strong>
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
                        <h3>Detalhes Invoice Plans</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($invoicePlan->name) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Entry Type') ?></th>
                                                                <td><?= $invoicePlan->has('entry_type') ? $this->Html->link($invoicePlan->entry_type->name, ['controller' => 'EntryTypes', 'action' => 'view', $invoicePlan->entry_type->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($invoicePlan->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($invoicePlan->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($invoicePlan->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($invoicePlan->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($invoicePlan->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($invoicePlan->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3><?= __('Related Block Invoices') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($invoicePlan->block_invoices)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Block Id') ?></th>
                        <th><?= __('Invoice Plan Id') ?></th>
                        <th><?= __('Value') ?></th>
                        <th><?= __('Issue Date') ?></th>
                        <th><?= __('Expiration Date') ?></th>
                        <th><?= __('Reference Date') ?></th>
                        <th><?= __('Payment Status') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($invoicePlan->block_invoices as $blockInvoices): ?>
                <tr>
                    <td><?= h($blockInvoices->id) ?></td>
                    <td><?= h($blockInvoices->block_id) ?></td>
                    <td><?= h($blockInvoices->invoice_plan_id) ?></td>
                    <td><?= h($blockInvoices->value) ?></td>
                    <td><?= h($blockInvoices->issue_date) ?></td>
                    <td><?= h($blockInvoices->expiration_date) ?></td>
                    <td><?= h($blockInvoices->reference_date) ?></td>
                    <td><?= h($blockInvoices->payment_status) ?></td>
                    <td><?= h($blockInvoices->created) ?></td>
                    <td><?= h($blockInvoices->updated) ?></td>
                    <td><?= h($blockInvoices->created_by) ?></td>
                    <td><?= h($blockInvoices->updated_by) ?></td>
                    <td><?= h($blockInvoices->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'BlockInvoices','action' => 'view', $blockInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'BlockInvoices','action' => 'edit', $blockInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'BlockInvoices','action' => 'delete', $blockInvoices->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $invoicePlan->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3><?= __('Related User Invoices') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($invoicePlan->user_invoices)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Apartment Id') ?></th>
                        <th><?= __('Invoice Plan Id') ?></th>
                        <th><?= __('Value') ?></th>
                        <th><?= __('Issue Date') ?></th>
                        <th><?= __('Expiration Date') ?></th>
                        <th><?= __('Reference Date') ?></th>
                        <th><?= __('Payment Status') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($invoicePlan->user_invoices as $userInvoices): ?>
                <tr>
                    <td><?= h($userInvoices->id) ?></td>
                    <td><?= h($userInvoices->user_id) ?></td>
                    <td><?= h($userInvoices->apartment_id) ?></td>
                    <td><?= h($userInvoices->invoice_plan_id) ?></td>
                    <td><?= h($userInvoices->value) ?></td>
                    <td><?= h($userInvoices->issue_date) ?></td>
                    <td><?= h($userInvoices->expiration_date) ?></td>
                    <td><?= h($userInvoices->reference_date) ?></td>
                    <td><?= h($userInvoices->payment_status) ?></td>
                    <td><?= h($userInvoices->created) ?></td>
                    <td><?= h($userInvoices->updated) ?></td>
                    <td><?= h($userInvoices->created_by) ?></td>
                    <td><?= h($userInvoices->updated_by) ?></td>
                    <td><?= h($userInvoices->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'UserInvoices','action' => 'view', $userInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'UserInvoices','action' => 'edit', $userInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'UserInvoices','action' => 'delete', $userInvoices->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $invoicePlan->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
</div>
</div>


