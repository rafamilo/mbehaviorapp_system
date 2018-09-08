
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Apartments</h2>
        <ol class="breadcrumb">
            <li>Apartments</li>
            <li class="active">
                <strong>Litagem de Apartments</strong>
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
                        <h3>Detalhes Apartments</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($apartment->name) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $apartment->has('user') ? $this->Html->link($apartment->user->name, ['controller' => 'Users', 'action' => 'view', $apartment->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($apartment->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($apartment->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($apartment->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($apartment->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($apartment->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($apartment->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3><?= __('Related Lodger Apartments') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($apartment->lodger_apartments)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Lodger Id') ?></th>
                        <th><?= __('Apartment Id') ?></th>
                        <th><?= __('Init Date') ?></th>
                        <th><?= __('End Date') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($apartment->lodger_apartments as $lodgerApartments): ?>
                <tr>
                    <td><?= h($lodgerApartments->id) ?></td>
                    <td><?= h($lodgerApartments->lodger_id) ?></td>
                    <td><?= h($lodgerApartments->apartment_id) ?></td>
                    <td><?= h($lodgerApartments->init_date) ?></td>
                    <td><?= h($lodgerApartments->end_date) ?></td>
                    <td><?= h($lodgerApartments->created) ?></td>
                    <td><?= h($lodgerApartments->updated) ?></td>
                    <td><?= h($lodgerApartments->created_by) ?></td>
                    <td><?= h($lodgerApartments->updated_by) ?></td>
                    <td><?= h($lodgerApartments->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'LodgerApartments','action' => 'view', $lodgerApartments->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'LodgerApartments','action' => 'edit', $lodgerApartments->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'LodgerApartments','action' => 'delete', $lodgerApartments->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $apartment->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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
            <?php if (!empty($apartment->user_invoices)): ?>
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
                <?php foreach ($apartment->user_invoices as $userInvoices): ?>
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
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'UserInvoices','action' => 'delete', $userInvoices->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $apartment->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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


