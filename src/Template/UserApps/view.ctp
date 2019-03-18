
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>User Apps</h2>
        <ol class="breadcrumb">
            <li>User Apps</li>
            <li class="active">
                <strong>Litagem de User Apps</strong>
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
                        <h3>Detalhes User Apps</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($userApp->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($userApp->status) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Quem Cadastrou') ?></th>
                                                                <td><?= $userApp->has('user') ? $this->Html->link($userApp->user->name, ['controller' => 'Users', 'action' => 'view', $userApp->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($userApp->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Usage Time') ?></th>
                                <td><?= $this->Number->format($userApp->usage_time) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Last Usage Time') ?></th>
                                <td><?= $this->Number->format($userApp->last_usage_time) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Usage In This Session') ?></th>
                                <td><?= $this->Number->format($userApp->usage_in_this_session) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($userApp->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($userApp->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($userApp->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($userApp->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>


