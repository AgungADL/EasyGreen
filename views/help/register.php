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
        <h1>Register</h1>
        <p class="intro">Jika anda ingin membuat akun, tentu langkah pertama yang harus anda lakukan adalah register.</p>

        <div class="section">
            <h2>Apa yang ada di register?</h2>
            <div class="step">
                <div class="step-icon">A</div>
                <p>Username yang unik.</p>
            </div>
            <div class="step">
                <div class="step-icon">B</div>
                <p>Password yang mudah diingat.</p>
            </div>
        </div><br>

        <h1>Steps to Register an Account</h1>
        <div class="section">
            <h2>Ke halaman register</h2>
            <div class="step">
                <p>Langkah pertama yang harus anda lakukan untuk register adalah masuk ke halaman register.</p>
            </div>
            <p>Kalau anda bingung, anda bisa masuk ke halaman login lalu click "register". Anda akan langsung diarahkan ke halaman register.</p>
            <p>Halaman yang tampil :<img src="<?= Yii::getAlias('@web/images/register.png') ?>" alt="Halaman register"></p>
        </div>
        <div class="section">
            <h2>Isi Username</h2>
            <div class="step">
                <p>Setelah ada di halaman register, sekarang anda tinggal isi username sesuai keinginan anda. Diusahakan menggunakan username yang unik.</p>
            </div>
        </div>
        <div class="section">
            <h2>Isi Password</h2>
            <div class="step">
                <p>Apabila sudah mengisi username, sekarang anda isi password menggunakan password yang mudah di ingat.</p>
            </div>
            <p>password memiliki 2 mode. Kesatu adalah mode tidak terlihat yang nanti akan bersimbol bulat hitam. Dan yang kedua adalah mode terlihat yang bisa anda aktifkan ketika anda menclick icon mata di samping kanan, itu akan membuat password anda terlihat.</p>
        </div>
        <div class="section">
            <h2>Submit</h2>
            <div class="step">
                <p>Setelah anda mengisi kedua hal itu, anda tinggal kirim dengan cara click tombol register. Jika berhasil anda akan diarahkan ke halaman login.</p>
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
            <?= Html::a('Login ᯓ➤', ['help/load-view', 'view' => 'login']) ?>
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