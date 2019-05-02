<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>Prêmios</h2>
                    <strong><?= __('Listar Prêmios') ?></strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="awards" class="form card-body">
                    <?= $this->Form->create($awards) ?>
                    <div class="col-12 no-padding row">
                        <div class='col-6'>
                            <?= $this->Form->input('name', ['label' => 'Nome do prêmio', 'class' => 'form-control']); ?>
                        </div>
                        <div class='col-6'>
                            <?= $this->Form->input('sort_date', ['label' => 'Data do sorteio', 'type' => 'text', 'class' => 'datepicker form-control', 'mask' => 'date']); ?>
                        </div>
                        <div class='col-6'>
                            <?= $this->Form->input('description', ['label' => 'Descrição do prêmio', 'class' => 'form-control']); ?>
                        </div>
                        <div class="col-12 no-padding text-center mt-20">
                            <?= $this->Form->button("<i class='fa fa-search'></i>", ['type' => 'submit', 'class' => 'btn btn-light btn-icons mr-2', 'escape' => false]) ?>
                            <?= $this->Html->link("<i class='fa fa-refresh'></i>", [], ['title' => 'Limpar formulário', 'class' => 'btn btn-light btn-icons', 'escape' => false]) ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="awards" class="form card-body">
                    <div class="row no-padding">
                        <div class="col-6 no-padding">
                            <h4 class="card-title">Prêmios</h4>
                        </div>
                        <div class="col-6 no-padding text-right">
                            <p class="no-margin">
                                <?= $this->Html->link("<i class='fa fa-plus'></i>" . ' Cadastrar Award', ['action' => 'add'], ['title' => 'Cadastrar Award', 'class' => 'btn btn-primary', 'escape' => false]) ?>
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <?= $this->Paginator->sort('name', 'Nome') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('sort_date', 'Data do sorteio') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('description', 'Descrição') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('created', ['label' => 'Dt. Criação']) ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('updated', ['label' => 'Dt. Atualizacao']) ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('created_by', ['label' => 'Cadastrado por']) ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('updated_by', ['label' => 'Atualizador por']) ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('status') ?>
                                    </th>
                                    <th class="actions">
                                        <?= __('Ações') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($awards as $award) : ?>
                                    <tr>
                                        <td>
                                            <?= h($award->name) ?>
                                        </td>
                                        <td>
                                            <?= date_format($award->sort_date, 'd/m/Y') ?>
                                        </td>
                                        <td>
                                            <?= h($award->description) ?>
                                        </td>
                                        <td>
                                            <?= date_format($award->created, 'd/m/Y H:m') ?>
                                        </td>
                                        <td>
                                            <?= date_format($award->updated, 'd/m/Y H:m') ?>
                                        </td>
                                        <td>
                                            <?= $award->virtualCreatedBy ?>
                                        </td>
                                        <td>
                                            <?= $award->virtualUpdatedBy ?>
                                        </td>
                                        <td>
                                            <?= h($award->status) ?>
                                        </td>
                                        <td class="actions">
                                            <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller' => 'awards', 'action' => 'view', $award->id], ['toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Detalhes', 'escape' => false, 'class' => 'btn btn-icons btn-info']) ?>
                                            <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller' => 'awards', 'action' => 'edit', $award->id], ['toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Editar', 'escape' => false, 'class' => 'btn btn-icons btn-primary']) ?>
                                            <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller' => 'awards', 'action' => 'delete', $award->id], ['onclick' => 'excluir(event, this)', 'toggle' => 'tooltip', 'data-placement' => 'bottom', 'title' => 'Deletar', 'escape' => false, 'class' => 'btn btn-icons btn-danger', 'listen' => 'f']) ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <div class="paginator">
                                <ul class="pagination">
                                    <?= $this->Paginator->prev("<i class='fa fa-chevron-left'></i>", ['escape' => false]) ?>
                                    <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next("<i class='fa fa-chevron-right'></i>", ['escape' => false]) ?>
                                </ul>
                                <p>
                                    <?= $this->Paginator->counter('Página {{page}} de {{pages}}') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>