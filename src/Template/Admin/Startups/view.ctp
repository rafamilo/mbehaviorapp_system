<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Startup $startup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Startup'), ['action' => 'edit', $startup->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Startup'), ['action' => 'delete', $startup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $startup->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Startups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Startup'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="startups view large-9 medium-8 columns content">
    <h3><?= h($startup->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($startup->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razao') ?></th>
            <td><?= h($startup->razao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($startup->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= $this->Number->format($startup->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($startup->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($startup->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated By') ?></th>
            <td><?= $this->Number->format($startup->updated_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($startup->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($startup->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($startup->description)); ?>
    </div>
</div>
