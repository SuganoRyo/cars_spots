<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CarSpot> $carSpots
 */
?>
<div class="container pt-3">
    <h3><?= __('スポット一覧') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('latitude') ?></th>
                    <th><?= $this->Paginator->sort('longitude') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                    <th><?= $this->Paginator->sort('deleted_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carSpots as $carSpot): ?>
                <tr>
                    <td><?= $this->Number->format($carSpot->id) ?></td>
                    <td><?= $carSpot->has('user') ? $this->Html->link($carSpot->user->name, ['controller' => 'Users', 'action' => 'view', $carSpot->user->id]) : '' ?></td>
                    <td><?= h($carSpot->name) ?></td>
                    <td><?= h($carSpot->address) ?></td>
                    <td><?= $this->Number->format($carSpot->latitude) ?></td>
                    <td><?= $this->Number->format($carSpot->longitude) ?></td>
                    <td><?= h($carSpot->created_at) ?></td>
                    <td><?= h($carSpot->modified_at) ?></td>
                    <td><?= h($carSpot->deleted_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carSpot->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carSpot->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carSpot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carSpot->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('paginator') ?>
</div>
