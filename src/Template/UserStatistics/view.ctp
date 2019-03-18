
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>User Statistics</h2>
        <ol class="breadcrumb">
            <li>User Statistics</li>
            <li class="active">
                <strong>Litagem de User Statistics</strong>
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
                        <h3>Detalhes User Statistics</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Phone Brand') ?></th>
                                <td><?= h($userStatistic->phone_brand) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Phone Carrier') ?></th>
                                <td><?= h($userStatistic->phone_carrier) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Phone Model') ?></th>
                                <td><?= h($userStatistic->phone_model) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Phone Number') ?></th>
                                <td><?= h($userStatistic->phone_number) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Phone Manufacturer') ?></th>
                                <td><?= h($userStatistic->phone_manufacturer) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('System Name') ?></th>
                                <td><?= h($userStatistic->system_name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('System Version') ?></th>
                                <td><?= h($userStatistic->system_version) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Timezone') ?></th>
                                <td><?= h($userStatistic->timezone) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Battery Level') ?></th>
                                <td><?= h($userStatistic->battery_level) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Ip') ?></th>
                                <td><?= h($userStatistic->ip) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('User Agent') ?></th>
                                <td><?= h($userStatistic->user_agent) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Air Plane Mode On') ?></th>
                                <td><?= h($userStatistic->air_plane_mode_on) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Is Emulator') ?></th>
                                <td><?= h($userStatistic->is_emulator) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Is Tablet') ?></th>
                                <td><?= h($userStatistic->is_tablet) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Is Landscape') ?></th>
                                <td><?= h($userStatistic->is_landscape) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Device Type') ?></th>
                                <td><?= h($userStatistic->device_type) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Connection Type') ?></th>
                                <td><?= h($userStatistic->connection_type) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Connection Effective Type') ?></th>
                                <td><?= h($userStatistic->connection_effective_type) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($userStatistic->status) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $userStatistic->has('user') ? $this->Html->link($userStatistic->user->name, ['controller' => 'Users', 'action' => 'view', $userStatistic->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($userStatistic->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($userStatistic->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($userStatistic->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($userStatistic->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($userStatistic->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


