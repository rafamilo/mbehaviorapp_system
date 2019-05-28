<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Novo Admin
                    </h2>
                    <strong>
                        <?= __('Cadastrar Admin') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="admin" class="form card-body">
                    <?= $this->Form->create($user) ?>
                    <div class="col-12 no-padding row">
                        <div class='col-6'>
                            <?= $this->Form->input('name', ['class' => 'form-control']); ?>
                        </div>
                        <div class='col-6'>
                            <?= $this->Form->input('email', ['class' => 'form-control']); ?>
                        </div>
                        <div class='col-6'>
                            <?= $this->Form->input('senha', ['class' => 'form-control']); ?>
                        </div>
                        <div class="col-12 no-padding text-right mt-20">
                            <?= $this->Form->button(__('Salvar'), ['type' => 'submit', 'class' => 'btn btn-primary mr-2']) ?>
                            <?= $this->Form->button(__('Cancelar'), ['class' => 'btn btn-light', 'onclick' => 'verifyCancel(event)', 'type' => 'button']) ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>