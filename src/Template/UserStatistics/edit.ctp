<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        User Statistics
                    </h2>
                    <strong>
                                                <?= __('Editar User Statistic') ?>
                                            </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="userStatistics" class="form card-body">
                    <?= $this->Form->create($userStatistic) ?>
                    <div class="col-12 no-padding row">
                                                    <div class='col-6'>
                                                        <?=$this->Form->input('phone_brand', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_carrier', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_model', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_number', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('phone_manufacturer', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('system_name', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('system_version', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('timezone', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('battery_level', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('ip', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('user_agent', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('air_plane_mode_on', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('is_emulator', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('is_tablet', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('is_landscape', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('device_type', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('connection_type', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('connection_effective_type', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('created_by', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('updated_by', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('status', ['class'=>'form-control']); ?>
                                                    </div>
                                                <div class="col-12 no-padding text-right mt-20">
                            <?= $this->Form->button(__('Salvar'),['type'=>'submit', 'class'=>'btn btn-primary mr-2']) ?>
                            <?= $this->Form->button(__('Cancelar'), ['class'=>'btn btn-light', 'onclick'=>'verifyCancel(event)', 'type' => 'button'])?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>