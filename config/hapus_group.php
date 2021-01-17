<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil data ID yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM group_note WHERE id_group=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if ($execute) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script type='text/javascript'>alert('Berhasil Menghapus Group!');window.location.href = '../admin-serve/tabel_group.php';</script>";
} else {
    // Jika Gagal, Lakukan :
    echo "<script type='text/javascript'>alert('Gagal Menghapus Group, Group Terhung Dengan Content!');window.location.href = '../admin-serve/tabel_group.php';</script>";
}
