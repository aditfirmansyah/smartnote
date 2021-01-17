<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$id = $_POST['group_id'];
$g_n = $_POST['group_namex'];
$g_c = $_POST['group_codex'];
$g_p = $_POST['group_pwdx'];
// Proses ubah data ke Database
$sql = $pdo->prepare("UPDATE group_note SET group_name=:gn, group_code=:gc, group_password=:gp WHERE id_group=:id");
$sql->bindParam(':gn', $g_n);
$sql->bindParam(':gc', $g_c);
$sql->bindParam(':gp', $g_p);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if ($execute) { // Cek jika proses simpan ke database sukses atau tidak
    echo "<script type='text/javascript'>alert('Berhasil Mengubah Data Group!');window.location.href = '../client/profile_group.php';</script>";
} else {
    echo "<script type='text/javascript'>alert('Gagal Mengubah Data Group!');window.location.href = '../client/group_edit.php';</script>";
}
