<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StartupUser $startupUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Startup User'), ['action' => 'edit', $startupUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Startup User'), ['action' => 'delete', $startupUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $startupUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Startup Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Startup User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="startupUsers view large-9 medium-8 columns content">
    <h3><?= h($startupUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($startupUser->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $startupUser->has('user') ? $this->Html->link($startupUser->user->name, ['controller' => 'Users', 'action' => 'view', $startupUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($startupUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($startupUser->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($startupUser->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated By') ?></th>
            <td><?= $this->Number->format($startupUser->updated_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Joined') ?></th>
            <td><?= h($startupUser->joined) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retired') ?></th>
            <td><?= h($startupUser->retired) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($startupUser->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($startupUser->updated_at) ?></td>
        </tr>
    </table>
</div>
