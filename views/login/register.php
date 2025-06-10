<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var app\models\Pengguna $user */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register EasyGreen</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/css/register.css') ?>">
    <link rel="icon" href="<?= Yii::getAlias('@web/images/logo.webp') ?>">

    <!-- SweetAlert2 CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <?= Html::a('&lt;', ['login/index'], ['class' => 'panah']) ?>
            <h1 class="register">REGISTER</h1>
            <img src="<?= Yii::getAlias('@web/images/1easy.png') ?>" alt="EasyGreen Logo">
            <p>Butuh bantuan? <?= Html::a('Get Help', ['help/index', 'view' => 'about-account'], ['target' => 'blank']) ?></p>
        </div>
        <div class="kanan">
            <?php $form = ActiveForm::begin(); ?>
            <label for="uname">USERNAME</label>
            <?= $form->field($user, 'username')->textInput([
                'placeholder' => 'Username',
                'class' => 'isi',
            ])->label(false) ?>
            <div class="password-container">
                <label for="pass">PASSWORD</label>
                <div class="input-wrapper">
                    <?= $form->field($user, 'password')->passwordInput([
                        'id' => 'pass',
                        'placeholder' => 'Password',
                        'class' => 'isi'
                    ])->label(false) ?>
                    <span class="toggle-password" onclick="togglePassword('pass')">
                        <i class="eye-icon"> ͡o</i>
                    </span>
                </div>
            </div>

            <?= Html::submitButton('REGISTER', ['class' => 'kirim']) ?>
            <?php ActiveForm::end(); ?>
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

        // <?php if (Yii::$app->session->hasFlash('success')): ?>
            //     Swal.fire({
            //         icon: 'success',
            //         title: 'Success!',
            //         text: '<?= Yii::$app->session->getFlash('success') ?>',
            //         timer: 3000,
            //         timerProgressBar: true,
            //         showConfirmButton: false,
            //         didClose: () => {
            //             <?php if (isset($redirect)): ?>
                //                 window.location.href = '<?= $redirect ?>';
                //             <?php endif; ?>
            //         }
            //     })
            // <?php endif; ?>
    </script>
</body>

</html>