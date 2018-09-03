<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Edition[]|\Cake\Collection\CollectionInterface $editions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Edition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Weeks'), ['controller' => 'Weeks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Week'), ['controller' => 'Weeks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="editions index large-9 medium-8 columns content">
    <h3><?= __('Editions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($editions as $edition): ?>
            <tr>
                <td><?= $this->Number->format($edition->id) ?></td>
                <td><?= h($edition->name) ?></td>
                <td><?= h($edition->start) ?></td>
                <td><?= h($edition->end) ?></td>
                <td><?= $this->Number->format($edition->status) ?></td>
                <td><?= $this->Number->format($edition->created_by) ?></td>
                <td><?= h($edition->created_at) ?></td>
                <td><?= $this->Number->format($edition->updated_by) ?></td>
                <td><?= h($edition->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $edition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $edition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $edition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $edition->id)]) ?>
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
