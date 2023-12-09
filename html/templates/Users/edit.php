<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    .shape-fieldset > div {
        display: flex;
        justify-content: flex-end;
    }
</style>
<div class="main bg-dark py-5">
    <?= $this->Form->create($user, ['class' => 'normal-form']) ?>
        <fieldset class="shape-fieldset">
            <legend class="text-white text-center fw-bold"><?= __('Edit User') ?></legend>
            <?= $this->Form->templates('name', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'placeholder' => '氏名',
            ]); ?>
            <?= $this->Form->templates('mail_address', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'placeholder' => 'メールアドレス',
            ]); ?>
            <?= $this->Form->templates('password', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'type' => 'password',
                'placeholder' => '現在パスワード',
                'val' => '',
            ]); ?>
            <?= $this->Form->templates('new-password', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'type' => 'password',
                'placeholder' => '新規パスワード',
                'val' => '',
            ]); ?>
            <div>
                <?= $this->Form->button('更新', [
                    'class' => 'btn btn-primary',
                    'style' => 'width: 22%',
                ]) ?>
            </div>
        </fieldset>
    <?= $this->Form->end() ?>
    <div class="d-flex justify-content-end">
        <?= $this->Html->link(__('戻る'), ['action' => 'index'], ['class' => 'me-3']) ?>
    </div>
</div>
