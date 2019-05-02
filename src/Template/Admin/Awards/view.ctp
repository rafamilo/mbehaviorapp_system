
<div class="this-place">
<div class="wrapper white-bg page-heading">
    <div class="col-lg-9">
        <h2>Awards</h2>
        <ol class="breadcrumb">
            <li>Awards</li>
            <li class="active">
                <strong>Litagem de Awards</strong>
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
                    <div class="table-responsive">
                        <h3>Detalhes Awards</h3>
                        <table class="table table-hover">
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($award->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= h($award->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($award->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created By') ?></th>
                                <td><?= $this->Number->format($award->created_by) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Updated By') ?></th>
                                <td><?= $this->Number->format($award->updated_by) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Sort Date') ?></th>
                                                                <td><?= h($award->sort_date) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Dt. Criação') ?></th>
                                                                <td><?= h($award->created) ?></td>
                            </tr>
                            <tr>
                                                                <th><?= __('Updated') ?></th>
                                                                <td><?= h($award->updated) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h3><?= __('Description') ?></h3>
                </div>
                <div class="ibox-content">
                    <?= $this->Text->autoParagraph(h($award->description)); ?>
                </div>
            </div>
</div>
</div>
</div>
</div>


