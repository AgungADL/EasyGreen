<?php
include 'koneksi.php';

// proses delet data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hapus = "DELETE FROM tanaman WHERE kd_tanaman = $id";
    $hapus1 = mysqli_query($koneksi, $hapus);
    $delet = "DELETE FROM hasil WHERE kd_tanaman = $id";
    $delet1 = mysqli_query($koneksi, $delet);

    if ($hapus1 && $delet1) {
        echo "<script> window.location='../halaman_tanaman.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.location='../halaman_tanaman.php';</script>";
    }
}
?>