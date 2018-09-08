
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Phone Types</h2>
        <ol class="breadcrumb">
            <li>Phone Types</li>
            <li class="active">
                <strong>Litagem de Phone Types</strong>
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
                        <h3>Detalhes Phone Types</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($phoneType->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($phoneType->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($phoneType->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($phoneType->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($phoneType->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($phoneType->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($phoneType->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h3><?= __('Related User Phones') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($phoneType->user_phones)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Phone') ?></th>
                        <th><?= __('Phone Type Id') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($phoneType->user_phones as $userPhones): ?>
                <tr>
                    <td><?= h($userPhones->id) ?></td>
                    <td><?= h($userPhones->user_id) ?></td>
                    <td><?= h($userPhones->phone) ?></td>
                    <td><?= h($userPhones->phone_type_id) ?></td>
                    <td><?= h($userPhones->created) ?></td>
                    <td><?= h($userPhones->updated) ?></td>
                    <td><?= h($userPhones->created_by) ?></td>
                    <td><?= h($userPhones->updated_by) ?></td>
                    <td><?= h($userPhones->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'UserPhones','action' => 'view', $userPhones->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'UserPhones','action' => 'edit', $userPhones->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'UserPhones','action' => 'delete', $userPhones->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $phoneType->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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


