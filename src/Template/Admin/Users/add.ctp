<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Users
                    </h2>
                    <strong>
                                                <?= __('Cadastrar User') ?>
                                            </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="users" class="form card-body">
                    <?= $this->Form->create($user) ?>
                    <div class="col-12 no-padding row">
                                                    <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('name', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('user_type_id', ['data'=>'select','controller'=>'userTypes','action'=>'fill', 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                            <?php                                         echo $this->Form->input('birthdate', ['type' => 'text', 'class' => 'datetimepicker form-control', 'append' => [$this->Form->button($this->Html->icon("calendar"), ['type'=>'button'])]]);
                                         ?>
                        </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('cpf', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('rg', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('email', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('answerable', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('created_by', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('updated_by', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6 no-padding'>
                                                        <?=$this->Form->input('status', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class="col-12 no-padding text-right mt-20">
                            <?= $this->Form->button(__('Salvar'),['type'=>'submit', 'class'=>'btn btn-primary mr-2']) ?>
                            <?= $this->Form->button(__('Cancelar'), ['class'=>'btn btn-light', 'onclick'=>'verifyCancel(event)'])?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>