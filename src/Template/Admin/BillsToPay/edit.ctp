<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Bills To Pay
                    </h2>
                    <strong>
                                                <?= __('Editar Bills To Pay') ?>
                                            </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="billsToPay" class="form card-body">
                    <?= $this->Form->create($billsToPay) ?>
                    <div class="col-12 no-padding row">
                                                    <div class='col-6'>
                                                        <?=$this->Form->input('invoice_plan_id', ['data'=>'select','controller'=>'invoicePlans','action'=>'fill','data-value'=>$billsToPay->invoice_plan_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('value',['prepend' => [$this->Form->button("<i class='fa fa-usd no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])], 'type' => 'text', 'mask' => 'money', 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                            <?php                                         echo $this->Form->input('issue_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($billsToPay->issue_date,'d/m/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                 ?>
                        </div>
                                                <div class='col-6'>
                            <?php                                         echo $this->Form->input('expiration_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($billsToPay->expiration_date,'d/m/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                 ?>
                        </div>
                                                <div class='col-6'>
                            <?php                                         echo $this->Form->input('reference_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>date_format($billsToPay->reference_date,'d/m/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                 ?>
                        </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('payment_status', ['class'=>'form-control']); ?>
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