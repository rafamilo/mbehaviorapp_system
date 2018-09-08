
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Lodger Apartments</h2>
        <ol class="breadcrumb">
            <li>Lodger Apartments</li>
            <li class="active">
                <strong>Litagem de Lodger Apartments</strong>
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
                        <h3>Detalhes Lodger Apartments</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $lodgerApartment->has('user') ? $this->Html->link($lodgerApartment->user->name, ['controller' => 'Users', 'action' => 'view', $lodgerApartment->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Apartment') ?></th>
                                                                <td><?= $lodgerApartment->has('apartment') ? $this->Html->link($lodgerApartment->apartment->name, ['controller' => 'Apartments', 'action' => 'view', $lodgerApartment->apartment->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($lodgerApartment->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($lodgerApartment->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($lodgerApartment->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($lodgerApartment->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Init Date') ?></th>
                                                                <td><?= h($lodgerApartment->init_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('End Date') ?></th>
                                                                <td><?= h($lodgerApartment->end_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($lodgerApartment->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($lodgerApartment->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3><?= __('Related Lodger Apartment Invoices') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($lodgerApartment->lodger_apartment_invoices)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Lodger Apartment Id') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($lodgerApartment->lodger_apartment_invoices as $lodgerApartmentInvoices): ?>
                <tr>
                    <td><?= h($lodgerApartmentInvoices->id) ?></td>
                    <td><?= h($lodgerApartmentInvoices->lodger_apartment_id) ?></td>
                    <td><?= h($lodgerApartmentInvoices->created) ?></td>
                    <td><?= h($lodgerApartmentInvoices->updated) ?></td>
                    <td><?= h($lodgerApartmentInvoices->created_by) ?></td>
                    <td><?= h($lodgerApartmentInvoices->updated_by) ?></td>
                    <td><?= h($lodgerApartmentInvoices->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'LodgerApartmentInvoices','action' => 'view', $lodgerApartmentInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'LodgerApartmentInvoices','action' => 'edit', $lodgerApartmentInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'LodgerApartmentInvoices','action' => 'delete', $lodgerApartmentInvoices->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $lodgerApartment->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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


