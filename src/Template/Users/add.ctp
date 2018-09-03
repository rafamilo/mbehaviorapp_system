<div class="content-wrapper">
    <div class="row">
        <div>
            <h2>
                Users
            </h2>
            <strong>
                                Cadastrar
                Users
                            </strong>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div id="users" class="form">
            <?= $this->Form->create($user) ?>
            <fieldset>
                                <legend>
                    <?= __('Cadastrar User') ?>
                </legend>
                                                <div class='col-md-6'>
                                        <?=$this->Form->input('name', [class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('user_type_id', ['data'=>'select','controller'=>'userTypes','action'=>'fill', class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                    <?php                                     echo $this->Form->input('birthdate', ['type' => 'text', 'class' => 'datetimepicker form-control', 'append' => [$this->Form->button("<i class='fa fa-calendar'></i>"), ['type' => 'button'])]]);
                                     ?>
                </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('cpf', [class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('rg', [class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('email', [class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('answerable', [class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('created_by', [class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('updated_by', [class=>'form-control']); ?>
                                    </div>
                                <div class='col-md-6'>
                                        <?=$this->Form->input('status', [class=>'form-control']); ?>
                                    </div>
                            </fieldset>
            <div class="col-md-12 text-right">
                <?= $this->Form->submit(__('Salvar'),['class'=>'btn btn-primary mr-2']) ?>
                <?= $this->Form->Button(__('Cancelar'), ['class'=>'btn-light', 'onclick'=>'verifyCancel(event)'])>
            </div>
            <div class="clearfix"></div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>