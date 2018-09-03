<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Week[]|\Cake\Collection\CollectionInterface $weeks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Week'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Editions'), ['controller' => 'Editions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Edition'), ['controller' => 'Editions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="weeks index large-9 medium-8 columns content">
    <h3><?= __('Weeks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($weeks as $week): ?>
            <tr>
                <td><?= $this->Number->format($week->id) ?></td>
                <td><?= $this->Number->format($week->status) ?></td>
                <td><?= $week->has('edition') ? $this->Html->link($week->edition->name, ['controller' => 'Editions', 'action' => 'view', $week->edition->id]) : '' ?></td>
                <td><?= $this->Number->format($week->created_by) ?></td>
                <td><?= h($week->created_at) ?></td>
                <td><?= $this->Number->format($week->updated_by) ?></td>
                <td><?= h($week->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $week->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $week->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $week->id], ['confirm' => __('Are you sure you want to delete # {0}?', $week->id)]) ?>
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
