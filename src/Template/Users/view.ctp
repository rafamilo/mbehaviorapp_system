<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Announcements'), ['controller' => 'Announcements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Announcement'), ['controller' => 'Announcements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Party Hall Schedules'), ['controller' => 'PartyHallSchedules', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Party Hall Schedule'), ['controller' => 'PartyHallSchedules', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Invoices'), ['controller' => 'UserInvoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Invoice'), ['controller' => 'UserInvoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Phones'), ['controller' => 'UserPhones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Phone'), ['controller' => 'UserPhones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Type') ?></th>
            <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= $this->Number->format($user->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= $this->Number->format($user->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Answerable') ?></th>
            <td><?= $this->Number->format($user->answerable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($user->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated By') ?></th>
            <td><?= $this->Number->format($user->updated_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($user->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($user->birthdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated') ?></th>
            <td><?= h($user->updated) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Announcements') ?></h4>
        <?php if (!empty($user->announcements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Updated By') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Announcements', 'action' => 'view', $announcements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Announcements', 'action' => 'edit', $announcements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Announcements', 'action' => 'delete', $announcements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $announcements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Party Hall Schedules') ?></h4>
        <?php if (!empty($user->party_hall_schedules)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Init Date') ?></th>
                <th scope="col"><?= __('End Date') ?></th>
                <th scope="col"><?= __('Cost') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Updated By') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'PartyHallSchedules', 'action' => 'view', $partyHallSchedules->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PartyHallSchedules', 'action' => 'edit', $partyHallSchedules->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PartyHallSchedules', 'action' => 'delete', $partyHallSchedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partyHallSchedules->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Invoices') ?></h4>
        <?php if (!empty($user->user_invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Apartment Id') ?></th>
                <th scope="col"><?= __('Invoice Plan Id') ?></th>
                <th scope="col"><?= __('Value') ?></th>
                <th scope="col"><?= __('Issue Date') ?></th>
                <th scope="col"><?= __('Expiration Date') ?></th>
                <th scope="col"><?= __('Reference Date') ?></th>
                <th scope="col"><?= __('Payment Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Updated By') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'UserInvoices', 'action' => 'view', $userInvoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserInvoices', 'action' => 'edit', $userInvoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserInvoices', 'action' => 'delete', $userInvoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userInvoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Phones') ?></h4>
        <?php if (!empty($user->user_phones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Phone Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Updated') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Updated By') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'UserPhones', 'action' => 'view', $userPhones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserPhones', 'action' => 'edit', $userPhones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserPhones', 'action' => 'delete', $userPhones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPhones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
