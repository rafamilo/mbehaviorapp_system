<div class="users form">
    <?= $this->Flash->render('auth') ?>
    <legend class="text-center" style="margin-top: 100px"><?= __('Login') ?></legend>
    <?= $this->Form->create('',['style' => 'background-color: #517bf1; border-radius: 2px; padding: 10px 10px 10px 10px; margin-top: 20px', 'class' => 'm-t-15'])?>
    <fieldset>
        <?= $this->Form->input('username', ['label' => 'E-mail', 'style' => 'border-radius: 2px;']) ?>
        <?= $this->Form->input('password', ['label' => 'Senha', 'style' => 'border-radius: 2px;']) ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>
