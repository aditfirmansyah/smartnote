<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM diskusi WHERE id_diskusi=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if ($execute) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script type='text/javascript'>alert('Berhasil Menghapus Diskusi!');window.location.href = '../client/profile_group.php';</script>";
} else {
    // Jika Gagal, Lakukan :
    echo "<script type='text/javascript'>alert('Gagal Menghapus Diskusi!');window.location.href = '../client/profile_group.php';</script>";
}
