<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarSpot $carSpot
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<style>
    .shape-fieldset > div {
        display: flex;
        justify-content: flex-end;
    }
</style>
<div class="main bg-dark py-5">
    <?= $this->Form->create($carSpot, ['class' => 'normal-form']) ?>
        <fieldset class="shape-fieldset">
            <legend class="text-white text-center fw-bold"><?= __('スポット登録') ?></legend>
            <?= $this->Form->control('user_id', [
                'options' => $users,
                'empty' => true,
                'label' => false,
                'style' => 'width: 100%; height: 50px;'
            ]); ?>
            <?= $this->Form->templates('name', [
            'inputContainer' => '{{content}}',
            'class' => 'form-control',
            'style' => 'height: 50px',
            'placeholder' => 'スポット名',
            ]); ?>
            <?= $this->Form->templates('description', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'placeholder' => '説明',
            ]); ?>
            <?= $this->Form->templates('address', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'placeholder' => '住所',
            ]); ?>
            <?= $this->Form->templates('latitude', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'placeholder' => '経度',
            ]); ?>
            <?= $this->Form->templates('longitude', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'placeholder' => '緯度',
            ]); ?>
            <div>
                <?= $this->Form->button('登録', [
                    'class' => 'btn btn-primary',
                    'style' => 'width: 22%',
                ]) ?>
            </div>
        </fieldset>
    <?= $this->Form->end() ?>
</div>
