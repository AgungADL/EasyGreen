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
        <h1>Getting Started</h1>
        <p class="intro">Selamat datang di EasyGreen, kamu pasti kebingungan harus gimana kan? makannya kamu datang ke sini. Di bawah ini adalah sedikit penjelasan tentang EasyGreen.</p>

        <div class="section">
            <h2>Feature</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Mengelola tanaman berdasarkan akun.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Mengelola tanaman seperti menambah, cari berdasarkan kategori, mengurang, dan menghapus.</p>
            </div>
            <div class="step">
                <div class="step-icon">C</div>
                <p>Mengelola hasil panen seperti menambah, mengurang, dan menghapus.</p>
            </div>
        </div><br>

        <h1>Steps</h1>
        <div class="section">
            <h2>Membuat Akun</h2>
            <div class="step">
                <p>Langkah pertama sebelum mengelola tanaman adalah membuat akun dulu.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Membuat akun', ['help/load-view', 'view' => 'about-account']) ?></p>
        </div>
        <div class="section">
            <h2>Mengelola tanaman</h2>
            <div class="step">
                <p>Setelah mempunyai akun kita lanjut mengelola tanaman.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Mengelola tanaman', ['help/load-view', 'view' => 'managing-plants']) ?></p>
        </div>
        <div class="section">
            <h2>Mengelola hasil panen</h2>
            <div class="step">
                <p>Jika tanaman kita memiliki hasil panen, maka kita bisa mengelola hasil panen.</p>
            </div>
            <p>Selebihnya tentang <?= Html::a('Mengelola hasil panen', ['help/load-view', 'view' => 'managing-harvest']) ?></p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('About Your Account ᯓ➤', ['help/load-view', 'view' => 'about-account']) ?>
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