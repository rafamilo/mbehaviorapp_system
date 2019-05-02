<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>Prêmios</h2>
                    <strong><?= __('Cadastrar Prêmio') ?></strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="awards" class="form card-body">
                    <?= $this->Form->create($award) ?>
                    <div class="col-12 no-padding row">
                        <div class='col-6'>
                            <?= $this->Form->input('name', ['label' => 'Nome do prêmio', 'class' => 'form-control']); ?>
                        </div>
                        <div class='col-6'>
                            <?= $this->Form->input('sort_date', ['label' => 'Data do sorteio', 'type' => 'text', 'class' => 'datepicker form-control', 'mask' => 'date', 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type' => 'button', 'class' => 'background-append'])]]); ?>
                        </div>
                        <div class='col-6'>
                            <?= $this->Form->input('description', ['label' => 'Descrição do prêmio', 'class' => 'form-control']); ?>
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