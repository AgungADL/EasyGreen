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
        <h1>Remove Plants</h1>
        <p class="intro">Data pasti ada yang sudah tidak di gunakan lagi. Maka di kemanakan? tentu saja kita hapus.</p>

        <div class="section">
            <h2>Kenapa harus di hapus?</h2>
            <div class="step">
                <p>Agar anda tidak pusing dalama mengelola tanaman. Jika ada data yang salah penulisan atau ada data yang sudah tidak digunakan, maka akan lebih baik untuk kita hapus.</p>
            </div>
        </div>

        <h1>Steps to remove plants</h1>
        <div class="section">
            <h2>Ke halaman tanaman</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk melakukan penghapusan data tanaman adalah masuk ke halaman tanaman.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman sementara, lalu click tulisan tanaman di bagian atas. Nanti akan otomatis ke halaman tanaman.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/detailTanaman.png') ?>" alt="Halaman detail tanaman"></p>
        </div>
        <div class="section">
            <h2>Click icon sampah</h2>
            <div class="step">
                <p>Setelah ada di halaman tanaman, sekarang anda tinggal click icon sampah yang berada di samping kiri setiap data tanaman. Maka data akan automatis terhapus.</p>
            </div>
            <p>Penghapusan akan menyesuaikan dengan dimana icon tersebut berada.</p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Manage the Harvest ᯓ➤', ['help/load-view', 'view' => 'managing-harvest']) ?>
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