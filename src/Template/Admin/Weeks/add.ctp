<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Week $week
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Weeks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Editions'), ['controller' => 'Editions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Edition'), ['controller' => 'Editions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="weeks form large-9 medium-8 columns content">
    <?= $this->Form->create($week) ?>
    <fieldset>
        <legend><?= __('Add Week') ?></legend>
        <?php
            echo $this->Form->control('status');
            echo $this->Form->control('edition_id', ['options' => $editions]);
            echo $this->Form->control('created_by');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_by');
            echo $this->Form->control('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
