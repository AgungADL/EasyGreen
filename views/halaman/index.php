<?php

use yii\helpers\Html;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/halaman_utama.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">
</head>

<body>
    <header>
        <div class="landn">
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="logo EasyGreen" class="poto1">
            <div class="EgUname">
                <h1>EasyGreen</h1>
                <p><?= Yii::$app->user->isGuest ? 'Guest' : Html::encode(Yii::$app->user->identity->username) ?></p>
            </div>
        </div>
        <nav>
            <?= Html::a('BERANDA', ['index'], ['class' => 'a1']) ?> |
            <?= Html::a('TANAMAN', ['tanaman/index'], ['class' => 'a2']) ?> |
            <?= Html::a('BANTUAN', ['help/index', 'view' => 'getting-started'], ['class' => 'a2', 'target' => 'blank']) ?>
        </nav>
        <?php if (Yii::$app->user->isGuest): ?>
            <?= Html::button(Html::a('LOGIN', ['login/index'], ['class' => 'a2', 'style' => 'padding: 5px; border-radius: 10px;']), ['class' => 'a2', 'style' => 'padding: auto;']) ?>
        <?php else: ?>
            <?= Html::beginForm(['login/logout'], 'post')
                . Html::submitButton('LOGOUT', ['class' => 'a2'])
                . Html::endForm()
                ?>
        <?php endif; ?>
    </header>
    <main>
        <h2>Halo <?= Yii::$app->user->isGuest ? 'Guest' : Html::encode(Yii::$app->user->identity->username) ?></h2>
        <h2>Selamat datang di EasyGreen</h2><br><br><br>

        <p>
            Mari kita berkenalan dulu dengan fitur yang ada di website ini. <br><br><br> Seperti yang kamu tahu, website
            ini adalah
            website mengenai pengelolaan tanaman. Apa yang dimaksud pengelolaan tanaman itu? maksudnya di sini kamu bisa
            mendata tanaman yang
            kamu tanam di
            rumah. Jadi kamu tidak usah susah susah mengingat ada berapa tanaman kamu dan ada apa aja. Nah di sini kamu
            bisa menambahkan
            tanaman yang kamu punya sehingga pendataan akan lebih mudah dan aman. Selain kamu bisa menambahkan, kamu
            juga bisa
            menghapus dan juga kamu bisa mengupdate data yang udah terdaftar. Itulah yang disebut pengelolaan di sini.
            <br><br><br>

            Setiap tanaman pasti memiliki hasil kan? seperti buah buahan itu kan berbuah dan kalau sayuran ya memiliki
            hasil yaitu sayur, dan
            lain lain. Nah di website ini kamu juga bisa mengelola hasil dari tanaman kamu ini yang tentunya mudah dan
            tidak susah. <br><br><br>

            Kamu penasaran gak sih, dimana kita bisa mengelola data data tersebut? <br><br><br>

            Jawabannya adalah kamu bisa menclick icon Tanaman di kanan atas sana lalu kamu akan dialihkan ke halaman
            pengelolaan tanaman.
            Dan kalau kamu mau kembali lagi tinggal click beranda, maka akan kembali ke halaman ini. <br><br><br>

            Pengelolaan tanaman akan lebih mudah dengan EasyGreen ;)
        </p>
    </main>
    <footer>
        <p>
            Hak cipta &copy 2024 <br><br>
            Young Develop
        </p>
        <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="logo EasyGreen" class="poto2">
        <div class="NamaYW">
            <p>Ikuti kami:</p>
            <a href="https://www.youtube.com/channel/UCxSCPL_5c6QMMfuIlSoh0Kg" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/youtube.png') ?>" alt="Youtube" class="yt"></a>
            <a href="https://www.instagram.com/ardwpl/" target="_blank"><img
                    src="<?= Yii::getAlias('@web/images/instagram.png') ?>" alt="Instagram" class="ig"></a>
        </div>
    </footer>
</body>

</html>