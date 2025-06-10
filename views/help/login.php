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
        <h1>Login</h1>
        <p class="intro">Anda sudah memiliki akun kan? makannya anda ke sini. Nah sekarang saatnya anda login.</p>

        <div class="section">
            <h2>Apa yang ada di login?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Username yang sudah terdaftar.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Password yang sesuai dengan akun.</p>
            </div>
        </div><br>

        <h1>Steps to Login</h1>
        <div class="section">
            <h2>Ke halaman Login</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk login adalah masuk ke halaman login.</p>
            </div>
            <p>Jika bingung. Di halaman sementara, anda tinggal click tulisan halaman atau tombol login. Maka anda akan otomatis diarahkan ke halaman login. Tetapi untuk click tulisan tanaman itu hanya berlaku ketika anda belum login.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/login.png') ?>" alt="Halaman login"></p>
        </div>
        <div class="section">
            <h2>Isi Username</h2>
            <div class="step">
                <p>Setelah ada di halaman login, sekarang anda tinggal isi username sesuai dengan akun yang sudah anda buat.</p>
            </div>
        </div>
        <div class="section">
            <h2>Isi Password</h2>
            <div class="step">
                <p>Apabila sudah mengisi username, sekarang anda isi password menggunakan password yang sesuai dengan akun yang anda buat.</p>
            </div>
            <p>password memiliki 2 mode. Kesatu adalah mode tidak terlihat yang nanti akan bersimbol bulat hitam. Dan yang kedua adalah mode terlihat yang bisa anda aktifkan ketika anda menclick icon mata di samping kanan, itu akan membuat password anda terlihat.</p>
        </div>
        <div class="section">
            <h2>Submit</h2>
            <div class="step">
                <p>Setelah anda mengisi kedua hal itu, anda tinggal kirim dengan cara click tombol login. Jika berhasil anda akan diarahkan ke halaman sementara.</p>
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
            <?= Html::a('Logout ᯓ➤', ['help/load-view', 'view' => 'logout']) ?>
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