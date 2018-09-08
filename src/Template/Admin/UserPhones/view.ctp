
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>User Phones</h2>
        <ol class="breadcrumb">
            <li>User Phones</li>
            <li class="active">
                <strong>Litagem de User Phones</strong>
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
                        <h3>Detalhes User Phones</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $userPhone->has('user') ? $this->Html->link($userPhone->user->name, ['controller' => 'Users', 'action' => 'view', $userPhone->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Phone Type') ?></th>
                                                                <td><?= $userPhone->has('phone_type') ? $this->Html->link($userPhone->phone_type->name, ['controller' => 'PhoneTypes', 'action' => 'view', $userPhone->phone_type->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($userPhone->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($userPhone->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Phone') ?></th>
                                <td><?= $this->Number->format($userPhone->phone) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($userPhone->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($userPhone->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($userPhone->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($userPhone->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


