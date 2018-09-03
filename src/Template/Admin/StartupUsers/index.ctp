<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StartupUser[]|\Cake\Collection\CollectionInterface $startupUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Startup User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="startupUsers index large-9 medium-8 columns content">
    <h3><?= __('Startup Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('joined') ?></th>
                <th scope="col"><?= $this->Paginator->sort('retired') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($startupUsers as $startupUser): ?>
            <tr>
                <td><?= $this->Number->format($startupUser->id) ?></td>
                <td><?= h($startupUser->role) ?></td>
                <td><?= $startupUser->has('user') ? $this->Html->link($startupUser->user->name, ['controller' => 'Users', 'action' => 'view', $startupUser->user->id]) : '' ?></td>
                <td><?= h($startupUser->joined) ?></td>
                <td><?= h($startupUser->retired) ?></td>
                <td><?= $this->Number->format($startupUser->status) ?></td>
                <td><?= $this->Number->format($startupUser->created_by) ?></td>
                <td><?= h($startupUser->created_at) ?></td>
                <td><?= $this->Number->format($startupUser->updated_by) ?></td>
                <td><?= h($startupUser->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $startupUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $startupUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $startupUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $startupUser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
