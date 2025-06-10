<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/help_content.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">
</head>

<body>
    <main>
        <h1>About Your Account</h1>
        <p class="intro">Sebelum anda bisa mengelola tanaman dan bahkan hasil panen dari tanaman anda, Yang harus anda lakukan adalah membuat akun.</p>

        <div class="section">
            <h2>Why?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Anda bisa mengelola tanaman dan hasil panen anda, apabila anda sudah login.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Data anda akan aman.</p>
            </div>
        </div><br>

        <h1>Steps making account</h1>
        <div class="section">
            <h2>Register</h2>
            <div class="step">
                <p>Langkah pertama terntu saja anda harus register agar account anda terdaftar.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Register', ['help/load-view', 'view' => 'register']) ?></p>
        </div>
        <div class="section">
            <h2>Login</h2>
            <div class="step">
                <p>Setelah mempunyai account sekarang anda tinggal login untuk masuk ke halaman utama dan anda mulai bisa mengelola tanaman anda.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Login', ['help/load-view', 'view' => 'login']) ?></p>
        </div>
        <div class="section">
            <h2>Logout</h2>
            <div class="step">
                <p>Jika sudah menggunakan website, kami sarankan anda untuk logout demi keamanan anda.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Logout', ['help/load-view', 'view' => 'logout']) ?></p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Register ᯓ➤', ['help/load-view', 'view' => 'register']) ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-links">
            <a href="https://www.youtube.com/channel/UCxSCPL_5c6QMMfuIlSoh0Kg" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/youtube.png') ?>" alt="Youtube" class="yt"></a>
            <a href="https://www.instagram.com/ardwpl/" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/instagram.png') ?>" alt="Instagram" class="ig"></a>
        </div>
        <div>
            <p>© 2025 EasyGreen | Young Develop</p>
        </div>
        <div>
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="EasyGreen Logo" class="footer-logo">
        </div>
    </footer>

</html>