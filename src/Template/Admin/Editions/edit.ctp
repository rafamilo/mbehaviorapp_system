<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Edition $edition
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $edition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $edition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Editions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Weeks'), ['controller' => 'Weeks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Week'), ['controller' => 'Weeks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="editions form large-9 medium-8 columns content">
    <?= $this->Form->create($edition) ?>
    <fieldset>
        <legend><?= __('Edit Edition') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('start');
            echo $this->Form->control('end');
            echo $this->Form->control('status');
            echo $this->Form->control('created_by');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_by');
            echo $this->Form->control('updated_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
