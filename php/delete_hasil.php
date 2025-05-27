<?php
include 'koneksi.php';

// proses delet data
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $cari = "SELECT kd_tanaman FROM hasil WHERE kd_hasil = $id";
    $hasil = $koneksi->query($cari);

    if ($hasil && $hasil->num_rows > 0) {
        $data = $hasil->fetch_assoc();
        $kd_tanaman = $data['kd_tanaman'];

        $hapus = "DELETE FROM hasil WHERE kd_hasil = $id";

        if ($koneksi->query($hapus)) {
            echo "<script>window.location='../halaman_desc_tanaman.php?id=$kd_tanaman';</script>";
        } else {
            echo "<script>alert('Data gagal dihapus!'); window.location='../halaman_desc_tanaman.php?id=$kd_tanaman';</script>";
        }
    } else {
        echo "<script>alert('Data hasil tidak ditemukan!'); window.location='../halaman_desc_tanaman.php';</script>";
    }
}
?>