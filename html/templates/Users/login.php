<style>
    .form-signin {
        margin: auto;
        max-width: 50%;
    }
</style>
<?= $this->Flash->render() ?>
<section id="contact" class="page-section">
    <form class="form-signin" method="post">
        <fieldset>
            <legend class="section-heading text-center fw-bold">ログイン</legend>
            <label class="sr-only">メールアドレス</label>
            <input class="form-control" style="height: 50px;" type="text" name="mail_address" placeholder="メールアドレス" required>
            <label class="sr-only">パスワード</label>
            <input class="form-control mt-3" style="height: 50px;" type="password" name="password" placeholder="パスワード" required>
            <div class="checkbox mb-3 text-end">
                <label class="section-heading mt-3"><input type="checkbox" value="remember-me">ログイン状態を保存</label>
            </div>
            <input type="hidden" name="_csrfToken" autocomplete="off" value="<?= $this->request->getAttribute('csrfToken') ?>">
            <button class="btn btn-primary float-end" style="width: 22%;" type="submit">ログイン</a>
        </fieldset>
    </form>
</section>
