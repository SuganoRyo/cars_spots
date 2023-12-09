<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarSpot $carSpot
 */
?>
<div class="main container">
    <table class="table table-striped">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($carSpot->id) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $carSpot->has('user') ? $this->Html->link($carSpot->user->name, ['controller' => 'Users', 'action' => 'view', $carSpot->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($carSpot->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($carSpot->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($carSpot->address) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($carSpot->latitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($carSpot->longitude) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($carSpot->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified At') ?></th>
            <td><?= h($carSpot->modified_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted At') ?></th>
            <td><?= h($carSpot->deleted_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Actions') ?></th>
            <td>
                <?= $this->Html->link(__('Edit Car Spot'), ['action' => 'edit', $carSpot->id]) ?>
                <?= $this->Form->postLink(__('Delete Car Spot'), ['action' => 'delete', $carSpot->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carSpot->id)]) ?>
            </td>
        </tr>
    </table>
    <div class="d-flex justify-content-end">
        <?= $this->Html->link(__('戻る'), ['action' => 'index']) ?>
    </div>
</div>
