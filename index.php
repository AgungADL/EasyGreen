<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EasyGreen</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/logo.webp">

    <!-- icon mata -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="kontener">
        <div class="kiri">
            <h1>LOGIN</h1>
            <img src="img/1.png" alt="EasyGreen Logo">
            <p>Belum punya akun? <a href="register.php">Register</a></p>
        </div>
        <div class="kanan">
            <form action="#" method="post">
                <label for="uname">USERNAME</label> <br>
                <input type="text" id="uname" name="uname" placeholder="Username" required class="isi"> <br>
                <div class="password-container">
                    <label for="pass">PASSWORD</label> <br>
                    <div class="input-wrapper">
                        <input type="password" id="pass" name="pass" placeholder="Password" required class="isi">
                        <span class="toggle-password" onclick="togglePassword('pass')">
                            <i class="eye-icon"> ͡o</i>
                        </span>
                    </div>
                </div>
                <input type="submit" name="kirim" class="kirim" value="LOGIN">
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Uname = $_POST['uname'];
    $Pass = $_POST['pass'];

    $cari = "select username from pengguna where username = '$Uname' and password = '$Pass'";
    $hasil = $koneksi->query($cari);

    if ($hasil->num_rows > 0) {
        $user = $hasil->fetch_assoc();

        $_SESSION["login"] = "$Uname";

        $_SESSION['nm_pengguna'] = $user['username'];

        echo "<script>alert('Selamat " . $user['username'] . ", anda sudah berhasil login!!.'); window.location.href='halaman_utama.php';</script>";

        exit;
    } else {
        echo "<script>alert('Password atau username yang anda masukan salah.')</script>";
    }
}
?>