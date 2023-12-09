<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="main container">
    <table class="table table-striped">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Mail Address') ?></th>
            <td><?= h($user->mail_address) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($user->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified At') ?></th>
            <td><?= h($user->modified_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted At') ?></th>
            <td><?= h($user->deleted_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Actions') ?></th>
            <td>
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
            </td>
        </tr>
    </table>
    <div class="d-flex justify-content-end">
        <?= $this->Html->link(__('戻る'), ['action' => 'index']) ?>
    </div>
</div>
