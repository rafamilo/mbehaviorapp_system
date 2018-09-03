<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StartupUser $startupUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $startupUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $startupUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Startup Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="startupUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($startupUser) ?>
    <fieldset>
        <legend><?= __('Edit Startup User') ?></legend>
        <?php
            echo $this->Form->control('role');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('joined');
            echo $this->Form->control('retired', ['empty' => true]);
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
