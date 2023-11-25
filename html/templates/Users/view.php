<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
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
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Deleted') ?></th>
            <td><?= h($user->deleted) ?></td>
        </tr>
        <tr>
            <th><?= __('Actions') ?></th>
            <td>
                <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
                <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            </td>
        </tr>
    </table>
    <div class="d-flex justify-content-end">
        <?= $this->Html->link(__('戻る'), ['action' => 'index']) ?>
    </div>
</div>
