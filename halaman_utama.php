<?php
    session_start();
    if(empty ($_SESSION ["login"])){
        header ("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyGreen</title>
    <link rel="stylesheet" href="css/halaman_utama.css">
    <link rel="icon" href="img/logo.webp">
</head>

<body>
    <header>
        <div class="landn">
            <img src="img/1.png" alt="logo EasyGreen" class="poto1">
            <div class="EgUname">
                <h1>EasyGreen</h1>
                <p><?php echo $_SESSION['nm_pengguna']; ?></p>
            </div>
        </div>
        <nav>
            <a href="#" class="a1">BERANDA</a> |
            <a href="halaman_tanaman.php" class="a2">TANAMAN</a>
        </nav>
        <button onclick="logout()">LOGOUT</button>
    </header>
    <main>
        <h2>Halo <?php echo $_SESSION['nm_pengguna']; ?></h2>
        <h2>Selamat datang di EasyGreen</h2><br><br><br>

        <p>
            Mari kita berkenalan dulu dengan fitur yang ada di website ini. <br><br><br> Seperti yang kamu tahu, website ini adalah
            website mengenai pengelolaan tanaman. Apa yang dimaksud pengelolaan tanaman itu? maksudnya di sini kamu bisa mendata tanaman yang
            kamu tanam di
            rumah. Jadi kamu tidak usah susah susah mengingat ada berapa tanaman kamu dan ada apa aja. Nah di sini kamu
            bisa menambahkan
            tanaman yang kamu punya sehingga pendataan akan lebih mudah dan aman. Selain kamu bisa menambahkan, kamu
            juga bisa
            menghapus dan juga kamu bisa mengupdate data yang udah terdaftar. Itulah yang disebut pengelolaan di sini. <br><br><br>

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
        <img src="img/1.png" alt="logo EasyGreen" class="poto2">
        <div class="NamaYW">
            <p>Ikuti kami:</p>
            <a href="https://www.youtube.com/channel/UCxSCPL_5c6QMMfuIlSoh0Kg" target="_blank"><img src="img/youtube.png" alt="Youtube" class="yt"></a>
            <a href="https://www.instagram.com/ardwpl/" target="_blank"><img src="img/instagram.png" alt="Instagram" class="ig"></a>
        </div>
    </footer>
</body>

</html>

<script>
    function logout(){
        var konfirm = confirm("Apakah anda yakin ingin log out?");
        if (konfirm){
            window.location.href = "php/logout.php";
        } else {
            console.log("Log out dibatalkan.");
        }
    }
</script>