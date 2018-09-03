<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Startup $startup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $startup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $startup->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Startups'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="startups form large-9 medium-8 columns content">
    <?= $this->Form->create($startup) ?>
    <fieldset>
        <legend><?= __('Edit Startup') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('razao');
            echo $this->Form->control('description');
            echo $this->Form->control('cnpj');
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