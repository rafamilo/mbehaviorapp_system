<div class="content-wrapper">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h2>
                        Lodger Apartments
                    </h2>
                    <strong>
                        <?= __('Listar Lodger Apartment') ?>
                    </strong>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div id="lodgerApartments" class="form card-body">
                    <?= $this->Form->create($lodgerApartments) ?>
                    <div class="col-12 no-padding row">
                                                <div class='col-6'>
                                                        <?=$this->Form->input('lodger_id', ['data'=>'select','controller'=>'users','action'=>'fill','data-value'=>$lodgerApartments->lodger_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                                                        <?=$this->Form->input('apartment_id', ['data'=>'select','controller'=>'apartments','action'=>'fill','data-value'=>$lodgerApartments->apartment_id, 'class'=>'form-control']); ?>
                                                    </div>
                                                <div class='col-6'>
                            <?php                                                 echo $this->Form->input('init_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($lodgerApartments->init_date,'dd/MM/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                         ?>
                        </div>
                                                <div class='col-6'>
                            <?php                                                 echo $this->Form->input('end_date', ['type' => 'text', 'class' => 'datepicker form-control','value'=>$this->Time->format($lodgerApartments->end_date,'dd/MM/Y H:m'), 'append' => [$this->Form->button("<i class='fa fa-calendar no-margin'></i>", ['type'=>'button', 'class'=>'background-append'])]]);
                                                         ?>
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
                                                <div class="col-12 no-padding text-center mt-20">
                            <?= $this->Form->button("<i class='fa fa-search'></i>", ['type'=>'submit', 'class'=>'btn btn-light btn-icons mr-2', 'escape' => false]) ?>
                            <?= $this->Html->link("<i class='fa fa-refresh'></i>", [], ['title'=>'Limpar formulário', 'class'=>'btn btn-light btn-icons', 'escape' => false]) ?>
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
                <div id="lodgerApartments" class="form card-body">
                    <div class="row no-padding">
                            <div class="col-6 no-padding">
                                    <h4 class="card-title">
                                        Lodger Apartments
                                    </h4>
                                </div>
                                <div class="col-6 no-padding text-right">
                                    <p class="no-margin">
                                        <?= $this->Html->link("<i class='fa fa-plus'></i>".' Cadastrar Lodger Apartment', ['action' => 'add'],['title'=>'Cadastrar Lodger Apartment','class'=>'btn btn-primary','escape' => false]) ?>
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
                                        <?= $this->Paginator->sort('lodger_id') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('apartment_id') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('init_date') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('end_date') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('created',['label'=>'Dt. Criação']) ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('updated') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('created_by') ?>
                                    </th>
                                                                        <th>
                                        <?= $this->Paginator->sort('updated_by') ?>
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
                                <?php foreach ($lodgerApartments as $lodgerApartment): ?>
                                <tr>
                                                                        <td>
                                        <?= $this->Number->format($lodgerApartment->id) ?>
                                    </td>
                                                                        <td>
                                        <?= $lodgerApartment->has('user') ? $this->Html->link($lodgerApartment->user->name, ['controller' => 'Users', 'action' => 'view', $lodgerApartment->user->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= $lodgerApartment->has('apartment') ? $this->Html->link($lodgerApartment->apartment->name, ['controller' => 'Apartments', 'action' => 'view', $lodgerApartment->apartment->id]) : '' ?>
                                    </td>
                                                                        <td>
                                        <?= h($lodgerApartment->init_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($lodgerApartment->end_date) ?>
                                    </td>
                                                                        <td>
                                        <?= h($lodgerApartment->created) ?>
                                    </td>
                                                                        <td>
                                        <?= h($lodgerApartment->updated) ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($lodgerApartment->created_by) ?>
                                    </td>
                                                                        <td>
                                        <?= $this->Number->format($lodgerApartment->updated_by) ?>
                                    </td>
                                                                        <td>
                                        <?= h($lodgerApartment->status) ?>
                                    </td>
                                                                        <td class="actions">
                                        <?= $this->Html->link("<i class='fa fa-list-alt'></i>", ['controller'=>'lodgerApartments','action' => 'view', $lodgerApartment->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Detalhes','escape' => false,'class'=>'btn btn-icons btn-info']) ?>
                                        <?= $this->Html->link("<i class='fa fa-pencil'></i>", ['controller'=>'lodgerApartments','action' => 'edit', $lodgerApartment->id],['toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Editar','escape' => false,'class'=>'btn btn-icons btn-primary']) ?>
                                        <?= $this->Html->link("<i class='fa fa-remove'></i>",  ['controller'=>'lodgerApartments','action'=>'delete', $lodgerApartment->id],['onclick'=>'excluir(event, this)','toggle'=>'tooltip','data-placement'=>'bottom','title'=>'Deletar','escape' => false,'class'=>'btn btn-icons btn-danger','listen' => 'f']) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <div class="paginator">
                                <ul class="pagination">
                                    <?= $this->Paginator->prev("<i class='fa fa-chevron-left'></i>",['escape' => false]) ?>
                                    <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next("<i class='fa fa-chevron-right'></i>",['escape' => false]) ?>
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
