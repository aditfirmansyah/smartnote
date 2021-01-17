<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id_diskusix'];
$judul = $_POST['judulx'];
$isi = $_POST['isi_diskusix'];
$tanggal = $_POST['tanggalx'];
$jam = $_POST['jamx'];
$id_g = $_POST['id_groupx'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO diskusi(id_diskusi, judul_content, isi_diskusi, tanggal, jam, id_group) VALUES(:id_diskusi,:judul,:isi,:tanggal,:jam,:id_group)");
$sql->bindParam(':id_diskusi', $id);
$sql->bindParam(':judul', $judul);
$sql->bindParam(':isi', $isi);
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':jam', $jam);
$sql->bindParam(':id_group', $id_g);

$sql->execute(); // Eksekusi query insert
if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script type='text/javascript'>alert('Berhasil Menambah Diskusi!');window.location.href = '../client/profile_group.php';</script>";
} else {
    // Jika Gagal, Lakukan :
    echo "<script type='text/javascript'>alert('Gagal Menambah Diskusi!');window.location.href = '../client/profile_group.php';</script>";
}
