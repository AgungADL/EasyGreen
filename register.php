<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register EasyGreen</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="icon" href="img/logo.webp">
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <a href="index.php" class="panah" aria-label="Back to login">&lt;</a>
            <h1 class="register">REGISTER</h1>
            <img src="img/1.png" alt="EasyGreen Logo">
        </div>
        <div class="kanan">
            <form action="register.php" method="post" autocomplete="off">
                <label for="uname">USERNAME</label>
                <input type="text" id="uname" name="uname" placeholder="Username" required class="isi">

                <div class="password-container">
                    <label for="pass">PASSWORD</label>
                    <div class="input-wrapper">
                        <input type="password" id="pass" name="pass" placeholder="Password" required class="isi">
                        <span class="toggle-password" onclick="togglePassword('pass')">
                            <i class="eye-icon"> ͡o</i>
                        </span>
                    </div>
                </div>

                <input type="submit" name="kirim" class="kirim" value="REGISTER">
            </form>
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
    </script>
</body>

</html>

<?php
session_start();
include "php/koneksi.php";

if (!$koneksi) {
    echo "Tidak konek";
} else {

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['kirim'])) {
        $Uname = isset($_POST['uname']) ? $_POST['uname'] : '';
        $pass = isset($_POST['pass']) ? $_POST['pass'] : '';

        if (!empty($Uname) && !empty($pass)) {
            $SQL = "insert into pengguna values('', '$Uname', '$pass')";

            if ($koneksi->query($SQL) === false) {
                echo "Error: " . $SQL . "<br>" . $koneksi->error;
            } else {
                echo "<script>alert('Register berhasil'); window.location='index.php';</script>";
            }
        } else {
            echo "<script> alert('harap isi semua file.');</script>";
        }
    }
}
?>