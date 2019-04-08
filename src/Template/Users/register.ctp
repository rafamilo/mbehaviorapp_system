<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Register') ?></legend>
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('name') ?>
        <?= $this->Form->input('birthdate', ['type' => 'date']) ?>
        <?= $this->Form->input('cpf') ?>
        <?= $this->Form->input('rg') ?>
        <?= $this->Form->input('password') ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>