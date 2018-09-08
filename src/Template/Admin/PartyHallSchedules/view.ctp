
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Party Hall Schedules</h2>
        <ol class="breadcrumb">
            <li>Party Hall Schedules</li>
            <li class="active">
                <strong>Litagem de Party Hall Schedules</strong>
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
                        <h3>Detalhes Party Hall Schedules</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $partyHallSchedule->has('user') ? $this->Html->link($partyHallSchedule->user->name, ['controller' => 'Users', 'action' => 'view', $partyHallSchedule->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($partyHallSchedule->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($partyHallSchedule->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Cost') ?></th>
                                <td><?= $this->Number->format($partyHallSchedule->cost) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($partyHallSchedule->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($partyHallSchedule->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Init Date') ?></th>
                                                                <td><?= h($partyHallSchedule->init_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('End Date') ?></th>
                                                                <td><?= h($partyHallSchedule->end_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($partyHallSchedule->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($partyHallSchedule->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


