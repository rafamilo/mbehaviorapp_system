<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Week $week
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Week'), ['action' => 'edit', $week->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Week'), ['action' => 'delete', $week->id], ['confirm' => __('Are you sure you want to delete # {0}?', $week->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Weeks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Week'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Editions'), ['controller' => 'Editions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Edition'), ['controller' => 'Editions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="weeks view large-9 medium-8 columns content">
    <h3><?= h($week->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Edition') ?></th>
            <td><?= $week->has('edition') ? $this->Html->link($week->edition->name, ['controller' => 'Editions', 'action' => 'view', $week->edition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($week->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($week->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($week->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated By') ?></th>
            <td><?= $this->Number->format($week->updated_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($week->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($week->updated_at) ?></td>
        </tr>
    </table>
</div>
