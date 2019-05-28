<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Statistics
                    </h2>
                    <strong>
                        <?= __('Users List') ?>
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
                    <?= $this->Form->create($users) ?>
                    <div class="col-12 no-padding row">
                        <div class='col-6'>
                            <?= $this->Form->input('name', ['class' => 'form-control']); ?>
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
                <div id="users" class="form card-body">
                    <div class="row no-padding">
                        <div class="col-6 no-padding">
                            <h4 class="card-title">
                                Users
                            </h4>
                        </div>
                        <div class="col-6 no-padding text-right">
                            <p class="no-margin">
                                <?= $this->Html->link("<i class='fa fa-plus'></i>" . ' Cadastrar Admin', ['action' => 'newAdmin'], ['title' => 'Cadastrar Admin', 'class' => 'btn btn-primary', 'escape' => false]) ?>
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <?= $this->Paginator->sort('id') ?>
                                    </th>
                                    <th>
                                        <?= $this->Paginator->sort('name') ?>
                                    </th>
                                    <th class="actions">
                                        <?= __('Ações') ?>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td>
                                            <?= h($user->id) ?>
                                        </td>
                                        <td>
                                            <?= h($user->name) ?>
                                        </td>
                                        <td class="actions">
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