
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>User Types</h2>
        <ol class="breadcrumb">
            <li>User Types</li>
            <li class="active">
                <strong>Litagem de User Types</strong>
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
                        <h3>Detalhes User Types</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($userType->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($userType->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($userType->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($userType->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($userType->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($userType->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($userType->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3><?= __('Related Users') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($userType->users)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('Name') ?></th>
                        <th><?= __('User Type Id') ?></th>
                        <th><?= __('Birthdate') ?></th>
                        <th><?= __('Cpf') ?></th>
                        <th><?= __('Rg') ?></th>
                        <th><?= __('Email') ?></th>
                        <th><?= __('Answerable') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($userType->users as $users): ?>
                <tr>
                    <td><?= h($users->id) ?></td>
                    <td><?= h($users->name) ?></td>
                    <td><?= h($users->user_type_id) ?></td>
                    <td><?= h($users->birthdate) ?></td>
                    <td><?= h($users->cpf) ?></td>
                    <td><?= h($users->rg) ?></td>
                    <td><?= h($users->email) ?></td>
                    <td><?= h($users->answerable) ?></td>
                    <td><?= h($users->created) ?></td>
                    <td><?= h($users->updated) ?></td>
                    <td><?= h($users->created_by) ?></td>
                    <td><?= h($users->updated_by) ?></td>
                    <td><?= h($users->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'Users','action' => 'view', $users->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'Users','action' => 'edit', $users->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'Users','action' => 'delete', $users->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $userType->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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


