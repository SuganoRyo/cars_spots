<div class="main bg-dark py-5">
    <?= $this->Form->create(null, ['class' => 'normal-form']) ?>
        <fieldset>
            <legend class="text-white text-center fw-bold"><?= __('ログイン') ?></legend>
            <?= $this->Form->templates('mail_address', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control',
                'style' => 'height: 50px',
                'placeholder' => 'メールアドレス',
                'required' => true,
            ]); ?>
            <?= $this->Form->templates('password', [
                'inputContainer' => '{{content}}',
                'class' => 'form-control mt-3',
                'style' => 'height: 50px',
                'type' => 'password',
                'placeholder' => 'パスワード',
                'required' => true,
            ]); ?>
            <div class="checkbox mb-3 text-end">
                <?= $this->Form->checkbox('checkbox', [
                    'value' => 'remember-me',
                    'hiddenField' => false,
                ]); ?>
                <?= $this->Form->label('checkbox', 'ログイン状態を保存', [
                    'class' => 'text-white  section-heading mt-3',
                ]); ?>
            </div>
            <?= $this->Form->hidden('csrfToken', [
                'value' => $this->request->getAttribute('csrfToken'),
                'autocomplete' => 'off',
            ]); ?>
            <?= $this->Form->button(__('ログイン'), [
                'class' => 'btn btn-primary float-end',
                'style' => 'width: 22%',
            ]); ?>
        </fieldset>
    <?= $this->Form->end() ?>
</div>
