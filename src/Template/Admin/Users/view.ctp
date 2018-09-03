
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
                                <th><?= __('Name') ?></th>
                                <td><?= h($user->name) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('User Type') ?></th>
                                                                <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
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
                                <th><?= __('Cpf') ?></th>
                                <td><?= $this->Number->format($user->cpf) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Rg') ?></th>
                                <td><?= $this->Number->format($user->rg) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Answerable') ?></th>
                                <td><?= $this->Number->format($user->answerable) ?></td>
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
            <h3><?= __('Related Announcements') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($user->announcements)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Title') ?></th>
                        <th><?= __('Message') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->announcements as $announcements): ?>
                <tr>
                    <td><?= h($announcements->id) ?></td>
                    <td><?= h($announcements->user_id) ?></td>
                    <td><?= h($announcements->title) ?></td>
                    <td><?= h($announcements->message) ?></td>
                    <td><?= h($announcements->created) ?></td>
                    <td><?= h($announcements->updated) ?></td>
                    <td><?= h($announcements->created_by) ?></td>
                    <td><?= h($announcements->updated_by) ?></td>
                    <td><?= h($announcements->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'Announcements','action' => 'view', $announcements->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'Announcements','action' => 'edit', $announcements->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'Announcements','action' => 'delete', $announcements->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $user->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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
            <h3><?= __('Related Party Hall Schedules') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($user->party_hall_schedules)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Init Date') ?></th>
                        <th><?= __('End Date') ?></th>
                        <th><?= __('Cost') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->party_hall_schedules as $partyHallSchedules): ?>
                <tr>
                    <td><?= h($partyHallSchedules->id) ?></td>
                    <td><?= h($partyHallSchedules->user_id) ?></td>
                    <td><?= h($partyHallSchedules->init_date) ?></td>
                    <td><?= h($partyHallSchedules->end_date) ?></td>
                    <td><?= h($partyHallSchedules->cost) ?></td>
                    <td><?= h($partyHallSchedules->created) ?></td>
                    <td><?= h($partyHallSchedules->updated) ?></td>
                    <td><?= h($partyHallSchedules->created_by) ?></td>
                    <td><?= h($partyHallSchedules->updated_by) ?></td>
                    <td><?= h($partyHallSchedules->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'PartyHallSchedules','action' => 'view', $partyHallSchedules->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'PartyHallSchedules','action' => 'edit', $partyHallSchedules->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'PartyHallSchedules','action' => 'delete', $partyHallSchedules->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $user->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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
            <h3><?= __('Related User Invoices') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($user->user_invoices)): ?>
            <div class="table-responsive">
                <table class="table table-hover">
                <tr>
                        <th><?= __('Id') ?></th>
                        <th><?= __('User Id') ?></th>
                        <th><?= __('Apartment Id') ?></th>
                        <th><?= __('Invoice Plan Id') ?></th>
                        <th><?= __('Value') ?></th>
                        <th><?= __('Issue Date') ?></th>
                        <th><?= __('Expiration Date') ?></th>
                        <th><?= __('Reference Date') ?></th>
                        <th><?= __('Payment Status') ?></th>
                        <th><?= __('Created') ?></th>
                        <th><?= __('Updated') ?></th>
                        <th><?= __('Created By') ?></th>
                        <th><?= __('Updated By') ?></th>
                        <th><?= __('Status') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($user->user_invoices as $userInvoices): ?>
                <tr>
                    <td><?= h($userInvoices->id) ?></td>
                    <td><?= h($userInvoices->user_id) ?></td>
                    <td><?= h($userInvoices->apartment_id) ?></td>
                    <td><?= h($userInvoices->invoice_plan_id) ?></td>
                    <td><?= h($userInvoices->value) ?></td>
                    <td><?= h($userInvoices->issue_date) ?></td>
                    <td><?= h($userInvoices->expiration_date) ?></td>
                    <td><?= h($userInvoices->reference_date) ?></td>
                    <td><?= h($userInvoices->payment_status) ?></td>
                    <td><?= h($userInvoices->created) ?></td>
                    <td><?= h($userInvoices->updated) ?></td>
                    <td><?= h($userInvoices->created_by) ?></td>
                    <td><?= h($userInvoices->updated_by) ?></td>
                    <td><?= h($userInvoices->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link($this->Html->icon('list-alt'), ['controller' => 'UserInvoices','action' => 'view', $userInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link($this->Html->icon('pencil'), ['controller' => 'UserInvoices','action' => 'edit', $userInvoices->id],['data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'UserInvoices','action' => 'delete', $userInvoices->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $user->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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
            <h3><?= __('Related User Phones') ?></h3>
        </div>
        <div class="ibox-content">
            <?php if (!empty($user->user_phones)): ?>
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
                <?php foreach ($user->user_phones as $userPhones): ?>
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
                        <?= $this->Form->postLink($this->Html->icon('remove'), ['controller' => 'UserPhones','action' => 'delete', $userPhones->id], ['confirm' => __('Você tem certeza que deseja excluir o registro # {0}?', $user->id),'data-toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-xs btn-danger']) ?>
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


