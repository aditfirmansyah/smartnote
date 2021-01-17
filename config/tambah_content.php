<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['id_contentx'];
$judul = $_POST['judul_contentx'];
$isi = $_POST['isi_contentx'];
$tanggal = $_POST['tanggalx'];
$jam = $_POST['jamx'];
$id_g = $_POST['id_groupx'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO content(id_content, judul_content, isi_content, tanggal_buat, jam_buat, id_group) VALUES(:id_content,:judul,:isi,:tanggal,:jam,:id_group)");
$sql->bindParam(':id_content', $id);
$sql->bindParam(':judul', $judul);
$sql->bindParam(':isi', $isi);
$sql->bindParam(':tanggal', $tanggal);
$sql->bindParam(':jam', $jam);
$sql->bindParam(':id_group', $id_g);

$sql->execute(); // Eksekusi query insert
if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script type='text/javascript'>alert('Berhasil Menambah Content!');window.location.href = '../client/page-group.php';</script>";
} else {
    // Jika Gagal, Lakukan :
    echo "<script type='text/javascript'>alert('Gagal Menambah Content!');window.location.href = '../client/form_content.php';</script>";
}
