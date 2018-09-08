
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Lodger Apartment Invoices</h2>
        <ol class="breadcrumb">
            <li>Lodger Apartment Invoices</li>
            <li class="active">
                <strong>Litagem de Lodger Apartment Invoices</strong>
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
                        <h3>Detalhes Lodger Apartment Invoices</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Lodger Apartment') ?></th>
                                                                <td><?= $lodgerApartmentInvoice->has('lodger_apartment') ? $this->Html->link($lodgerApartmentInvoice->lodger_apartment->id, ['controller' => 'LodgerApartments', 'action' => 'view', $lodgerApartmentInvoice->lodger_apartment->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($lodgerApartmentInvoice->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($lodgerApartmentInvoice->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($lodgerApartmentInvoice->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($lodgerApartmentInvoice->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($lodgerApartmentInvoice->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($lodgerApartmentInvoice->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


