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
        <h1>Add Plants</h1>
        <p class="intro">Dalam mengelola tanaman, hal yang paling penting adalah anda harus menambahkan data tanaman anda terlebih dahulu.</p>

        <div class="section">
            <h2>Apa yang ada pada data tanaman?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Nama tanaman.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Kategori tanaman.</p>
            </div>
            <div class="step">
                <div class="step-icon">C</div>
                <p>Jumlah tanaman.</p>
            </div>
            <div class="step">
                <div class="step-icon">D</div>
                <p>Deskripsi tanaman.</p>
            </div>
        </div><br>

        <h1>Steps to add plants</h1>
        <div class="section">
            <h2>Ke halaman tanaman</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk menambah data tanaman adalah masuk ke halaman tanaman.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman sementara lalu click tulisan tanaman di bagian atas. Nanti akan otomatis ke halaman tanaman.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/halTanaman.png') ?>" alt="Halaman tanaman"></p>
        </div>
        <div class="section">
            <h2>Click tombol tambah</h2>
            <div class="step">
                <p>Setelah ada di halaman tanaman, sekarang anda tinggal click tombol "+" yang ada di tengah halaman itu. nanti anda akan otomatis menuju ke halaman menambah tanaman.</p>
            </div>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/createTanaman.png') ?>" alt="Halaman add tanaman"></p>
        </div>
        <div class="section">
            <h2>Isi data</h2>
            <div class="step">
                <p>Jika sudah berada di halaman menambah tanaman, sekarang anda tinggal isi semua field data tanaman yang sudah kami sediakan sesuai dengan tanaman yang anda punya.</p>
            </div>
        </div>
        <div class="section">
            <h2>Submit</h2>
            <div class="step">
                <p>Tahap terakhir jika anda sudah mengisi seluruh field data nya, anda tinggal click saja tombol tambah. Lalu nanti anda akan diarahkan ke halaman tanaman.</p>
            </div>
            <p>Jika ada data yang kurang sesuai dengan prosedur maka akan ada pemberi tahuan dan anda harus mengisi data yang lebih valid. </p>
        </div>

        <div class="feedback-section">
            <p>Was this page helpful?</p>
            <div class="feedback-buttons">
                <button onclick="alert('Syukurlah kalau membantu')">Yes</button>
                <button onclick="alert('Kami akan berusaha lebih baik')">No</button>
            </div>
        </div>

        <div class="navigation-bar">
            <?= Html::a('Search by Category ᯓ➤', ['help/load-view', 'view' => 'search-category']) ?>
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