
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Announcements</h2>
        <ol class="breadcrumb">
            <li>Announcements</li>
            <li class="active">
                <strong>Litagem de Announcements</strong>
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
                        <h3>Detalhes Announcements</h3>
                        <table class="table table-hover">
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $announcement->has('user') ? $this->Html->link($announcement->user->name, ['controller' => 'Users', 'action' => 'view', $announcement->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Title') ?></th>
                                <td><?= h($announcement->title) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Message') ?></th>
                                <td><?= h($announcement->message) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($announcement->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($announcement->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($announcement->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($announcement->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($announcement->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($announcement->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


