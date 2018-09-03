<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Announcements'), ['controller' => 'Announcements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Announcement'), ['controller' => 'Announcements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Party Hall Schedules'), ['controller' => 'PartyHallSchedules', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Party Hall Schedule'), ['controller' => 'PartyHallSchedules', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Invoices'), ['controller' => 'UserInvoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Invoice'), ['controller' => 'UserInvoices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Phones'), ['controller' => 'UserPhones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Phone'), ['controller' => 'UserPhones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('user_type_id', ['options' => $userTypes]);
            echo $this->Form->control('birthdate');
            echo $this->Form->control('cpf');
            echo $this->Form->control('rg');
            echo $this->Form->control('email');
            echo $this->Form->control('answerable');
            echo $this->Form->control('created_by');
            echo $this->Form->control('updated_by');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
