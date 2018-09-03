<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Edition $edition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Edition'), ['action' => 'edit', $edition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Edition'), ['action' => 'delete', $edition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $edition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Editions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Edition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Weeks'), ['controller' => 'Weeks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Week'), ['controller' => 'Weeks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="editions view large-9 medium-8 columns content">
    <h3><?= h($edition->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($edition->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($edition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($edition->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($edition->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated By') ?></th>
            <td><?= $this->Number->format($edition->updated_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($edition->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($edition->end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($edition->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($edition->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Weeks') ?></h4>
        <?php if (!empty($edition->weeks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Edition Id') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated By') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($edition->weeks as $weeks): ?>
            <tr>
                <td><?= h($weeks->id) ?></td>
                <td><?= h($weeks->status) ?></td>
                <td><?= h($weeks->edition_id) ?></td>
                <td><?= h($weeks->created_by) ?></td>
                <td><?= h($weeks->created_at) ?></td>
                <td><?= h($weeks->updated_by) ?></td>
                <td><?= h($weeks->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Weeks', 'action' => 'view', $weeks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Weeks', 'action' => 'edit', $weeks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Weeks', 'action' => 'delete', $weeks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $weeks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
