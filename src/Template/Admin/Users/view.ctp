
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Users</h2>
        <ol class="breadcrumb">
            <li>Users</li>
            <li class="active">
                <strong>Litagem de Users</strong>
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
                        <h3>Detalhes Users</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Password') ?></th>
                                <td><?= h($user->password) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($user->name) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('User Type') ?></th>
                                                                <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Cpf') ?></th>
                                <td><?= h($user->cpf) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Rg') ?></th>
                                <td><?= h($user->rg) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Email') ?></th>
                                <td><?= h($user->email) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($user->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($user->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($user->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($user->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Birthdate') ?></th>
                                                                <td><?= h($user->birthdate) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($user->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($user->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3><?= __('Related User Apps') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($user->user_apps)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Name') ?></th>
                        <th><?= __('Usage Time') ?></th>
                        <th><?= __('Last Usage Time') ?></th>
                        <th><?= __('Usage In This Session') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->user_apps as $userApps): ?>
                <tr>
                    <td><?= h($userApps->id) ?></td>
                    <td><?= h($userApps->name) ?></td>
                    <td><?= h($userApps->usage_time) ?></td>
                    <td><?= h($userApps->last_usage_time) ?></td>
                    <td><?= h($userApps->usage_in_this_session) ?></td>
                    <td><?= h($userApps->created) ?></td>
                    <td><?= h($userApps->updated) ?></td>
                    <td><?= h($userApps->created_by) ?></td>
                    <td><?= h($userApps->updated_by) ?></td>
                    <td><?= h($userApps->status) ?></td>
                    <td><?= h($userApps->user_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'UserApps','action' => 'view', $userApps->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'UserApps','action' => 'edit', $userApps->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'UserApps','action' => 'delete', $userApps->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $user->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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
            <h3><?= __('Related User Statistics') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($user->user_statistics)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Phone Brand') ?></th>
                        <th><?= __('Phone Carrier') ?></th>
                        <th><?= __('Phone Model') ?></th>
                        <th><?= __('Phone Number') ?></th>
                        <th><?= __('Phone Manufacturer') ?></th>
                        <th><?= __('System Name') ?></th>
                        <th><?= __('System Version') ?></th>
                        <th><?= __('Timezone') ?></th>
                        <th><?= __('Battery Level') ?></th>
                        <th><?= __('Ip') ?></th>
                        <th><?= __('User Agent') ?></th>
                        <th><?= __('Air Plane Mode On') ?></th>
                        <th><?= __('Is Emulator') ?></th>
                        <th><?= __('Is Tablet') ?></th>
                        <th><?= __('Is Landscape') ?></th>
                        <th><?= __('Device Type') ?></th>
                        <th><?= __('Connection Type') ?></th>
                        <th><?= __('Connection Effective Type') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->user_statistics as $userStatistics): ?>
                <tr>
                    <td><?= h($userStatistics->id) ?></td>
                    <td><?= h($userStatistics->phone_brand) ?></td>
                    <td><?= h($userStatistics->phone_carrier) ?></td>
                    <td><?= h($userStatistics->phone_model) ?></td>
                    <td><?= h($userStatistics->phone_number) ?></td>
                    <td><?= h($userStatistics->phone_manufacturer) ?></td>
                    <td><?= h($userStatistics->system_name) ?></td>
                    <td><?= h($userStatistics->system_version) ?></td>
                    <td><?= h($userStatistics->timezone) ?></td>
                    <td><?= h($userStatistics->battery_level) ?></td>
                    <td><?= h($userStatistics->ip) ?></td>
                    <td><?= h($userStatistics->user_agent) ?></td>
                    <td><?= h($userStatistics->air_plane_mode_on) ?></td>
                    <td><?= h($userStatistics->is_emulator) ?></td>
                    <td><?= h($userStatistics->is_tablet) ?></td>
                    <td><?= h($userStatistics->is_landscape) ?></td>
                    <td><?= h($userStatistics->device_type) ?></td>
                    <td><?= h($userStatistics->connection_type) ?></td>
                    <td><?= h($userStatistics->connection_effective_type) ?></td>
                    <td><?= h($userStatistics->created) ?></td>
                    <td><?= h($userStatistics->updated) ?></td>
                    <td><?= h($userStatistics->created_by) ?></td>
                    <td><?= h($userStatistics->updated_by) ?></td>
                    <td><?= h($userStatistics->status) ?></td>
                    <td><?= h($userStatistics->user_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'UserStatistics','action' => 'view', $userStatistics->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'UserStatistics','action' => 'edit', $userStatistics->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'UserStatistics','action' => 'delete', $userStatistics->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $user->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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


