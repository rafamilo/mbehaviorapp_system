<div class="this-place">
    <div class="white-bg page-heading">
        <div class="col-lg-9">
            <h2>Users</h2>
            <ol class="breadcrumb">
                <li>Users</li>
                <li class="active">
                    <strong>
                                                Cadastrar Users
                                            </strong>
                </li>
            </ol>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="area">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="users form">
                            <?= $this->Form->create($user) ?>
                            <fieldset>
                                                                <legend><?= __('Cadastrar User') ?></legend>
                                                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('name'); ?>
                                                                    </div>
                                                                            <div class='col-md-6'>
                                                                                                    <?=$this->Form->input('user_type_id', ['data'=>'select','controller'=>'userTypes','action'=>'fill']); ?>
                                                                                                </div>
                                                                                <div class='col-md-6'>
                                        <?php                                             echo $this->Form->input('birthdate', ['type' => 'text', 'class' => 'datetimepicker', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type' => 'button'])]]);
                                             ?>
                                    </div>
                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('cpf'); ?>
                                                                    </div>
                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('rg'); ?>
                                                                    </div>
                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('email'); ?>
                                                                    </div>
                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('answerable'); ?>
                                                                    </div>
                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('created_by'); ?>
                                                                    </div>
                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('updated_by'); ?>
                                                                    </div>
                                                                <div class='col-md-6'>
                                                                            <?=$this->Form->input('status'); ?>
                                                                    </div>
                                                            </fieldset>
                            <div class="col-md-12 text-right">
                                <?= $this->Form->submit(__('Salvar'),['class'=>'btn btn-primary']) ?>
                            </div>
                            <div class="clearfix"></div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

