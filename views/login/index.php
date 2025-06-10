<?php

use PhpParser\Node\Stmt\Label;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var app\models\User $login */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/login.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">

    <!-- SweetAlert2 CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <h1>LOGIN</h1>
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="EasyGreen Logo">
            <p>Butuh bantuan? <?= Html::a('Get Help', ['help/index', 'view' => 'about-account'], ['target' => 'blank']) ?></p>
        </div>
        <div class="kanan">
            <?php $form = ActiveForm::begin(); ?>
                <label for="uname">USERNAME</label> <br>
                <?= $form->field($login, 'username')->textInput([
                    'placeholder' => 'Username',
                    'class' => 'isi',
                ])->label(false) ?>
                <div class="password-container">
                    <label for="pass">PASSWORD</label> <br>
                    <div class="input-wrapper">
                        <?= $form->field($login, 'password')->passwordInput([
                            'id' => 'pass',
                            'placeholder' => 'Password',
                            'class' => 'isi',
                        ])->label(false) ?>
                        <span class="toggle-password" onclick="togglePassword('pass')">
                            <i class="eye-icon"> ͡o</i>
                        </span>
                    </div>
                </div>
                <?= Html::submitButton('LOGIN', ['class' => 'kirim']) ?>
            <?php ActiveForm::end(); ?>
            <p>Belum punya akun? <?= Html::a('Register', ['login/register']) ?></p>
            <?= Html::a('Back to main menu', ['halaman/index'], ['class' => 'back']) ?>
        </div>
    </div>

    <script>
        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = document.querySelector(`#${inputId} + .toggle-password i`);

            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "   ◠";
            } else {
                input.type = "password";
                icon.textContent = "   ͡o ";
            }
        }

        <?php if (Yii::$app->session->hasFlash('success')): ?>
            alert('<?= addslashes(Yii::$app->session->getFlash('success')) ?>');
        <?php endif; ?>
        <?php if (Yii::$app->session->hasFlash('error')): ?>
            alert('<?= addslashes(Yii::$app->session->getFlash('error')) ?>');
        <?php endif; ?>

        // <?php if(Yii::$app->session->hasFlash('success')): ?>
        //     Swal.fire({
        //         icon: 'success',
        //         title: 'Suksess!',
        //         text: '<?= Yii::$app->session->getFlash('success') ?>'
        //         timer: 2000,
        //         timerProgressBar: true,
        //         showConfirmButton: false,
        //         didClose: () => {
        //             <?php if (isset($redirect)): ?>
        //                 window.location.href = '<?= $redirect ?>';
        //             <?php endif; ?>
        //         }
        //     });
        // <?php endif; ?>
    </script>
</body>

</html>