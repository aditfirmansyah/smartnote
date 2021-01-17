<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id_diskusix'];
$judul = $_POST['judul_diskusix'];
$isi = $_POST['isi_diskusix'];
$tanggal = $_POST['tanggalx'];
$jam = $_POST['jamx'];

// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE diskusi SET judul_content=:judul, isi_diskusi=:isi, tanggal=:tanggal, jam=:jam WHERE id_diskusi=:id");
$sql->bindParam(':judul', $judul);
$sql->bindParam(':isi', $isi);
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':jam', $jam);
$sql->bindParam(':id', $id);

$execute = $sql->execute(); // Eksekusi / Jalankan query
if ($execute) { // Cek jika proses simpan ke database sukses atau tidak
    echo "<script type='text/javascript'>alert('Berhasil Mengubah Isi Diskusi!');window.location.href = '../client/profile_group.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Gagal Mengubah Isi Diskusi!');window.location.href = '../client/profile_group.php';</script>";
}
