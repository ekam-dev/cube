<?php
$this->extend('index');
$this->start('title_');
?>
<?= $this->Html->link('add new app', ['_name' => 'create'], ['class' => 'fw-bold text-capitalize']); ?>
<?php
$this->end();
?>
<div class="col-xxl-12 col-lg-12">
    <div class="table-responsive">
        <table class="table table-striped table-borderless">
            <thead class="table-dark">
                <tr>
                    <th><?= $this->Paginator->sort('app_name') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('password') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th><?= $this->Paginator->sort('created', 'saved date') ?></th>
                    <th><?= $this->Paginator->sort('modified', 'last update') ?></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($panels as $panel) : ?>
                <tr>
                    <td class="fw-bold text-capitalize"><?= h($panel->app_name) ?></td>
                    <td><?= $panel->username ?></td>
                    <td><?= $panel->password ?></td>
                    <td><?= $this->Html->link($panel->url, $panel->url, ['target' => '_blank']) ?></td>
                    <td><?= $this->Time->format($panel->created, \IntlDateFormatter::SHORT, false, 'Asia/Calcutta') ?></td>
                    <td><?= $this->Time->format($panel->modified, \IntlDateFormatter::SHORT, false, 'Asia/Calcutta') ?></td>
                    <td>
                        <?= $this->Html->link('view', ['action' => 'view', $panel->id], ['class' => 'btn btn-success text-capitalize rounded-0 btn-sm']) ?>
                        <?= $this->Html->link('edit', ['action' => 'edit', $panel->id], ['class' => 'btn btn-info text-capitalize rounded-0 btn-sm']) ?>
                        <?= $this->Form->postLink('delete', ['action' => 'delete', $panel->id], ['class' => 'btn btn-danger text-capitalize rounded-0 btn-sm', 'confirm' => __('Are you sure? #{0}',$panel->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tr>
            </tbody>

        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>

    </div>
</div>