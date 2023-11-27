<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'カーグラ探索';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <?= $this->Html->css(['styles', 'add-style']) ?>
    <?= $this->Html->script(['script']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="/home"><img src="/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/home#services">サービス内容</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home#portfolio">写真</a></li>
                    <li class="nav-item"><a class="nav-link" href="/home#contact">問い合わせ</a></li>                    
                    <?php if (is_null($auth)): ?>
                        <li class="nav-item"><?= $this->Html->link(__('新規登録'), ['controller' => 'users', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
                        <li class="nav-item"><?= $this->Html->link(__('ログイン'), ['controller' => 'users', 'action' => 'login'], ['class' => 'nav-link']) ?></li>
                    <?php else: ?>
                        <li class="nav-item"><?= $this->Html->link(__('全ユーザー'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
                        <li class="nav-item"><?= $this->Html->link(__('ログアウト'), ['controller' => 'users', 'action' => 'logout'], ['class' => 'nav-link']) ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <main>
        <?= $this->fetch('content') ?>
    </main>
    <footer class="footer fixed-bottom py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="link-dark text-decoration-none me-3" href="#!">プライバシーポリシー</a>
                    <a class="link-dark text-decoration-none" href="#!">利用規約</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<script>
    if ($(window).height() < $(document).height()) {
        $('footer').removeClass('fixed-bottom');
    }
</script>
