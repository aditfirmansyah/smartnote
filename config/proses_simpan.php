<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$tgl = date("dmYhis");
$nama_gp = $_POST['group_namex'];
$gpcode = $_POST['group_codex'];
$pass = $_POST['group_passwordx'];

// Proses simpan ke Database
$sql = $pdo->prepare("INSERT INTO group_note(id_group, group_name, group_code, group_password) VALUES(:id,:namax,:codex,:pwdx)");
$sql->bindParam(':id', $tgl);
$sql->bindParam(':namax', $nama_gp);
$sql->bindParam(':codex', $gpcode);
$sql->bindParam(':pwdx', $pass);
$sql->execute(); // Eksekusi query insert
if ($sql) {
    // Jika Sukses, Lakukan :
    echo "<script type='text/javascript'>alert('Berhasil Menambahkan Group!');window.location.href = '../create_group.php';</script>";
} else {
    // Jika Gagal, Lakukan :
    echo "<script type='text/javascript'>alert('Gagal Menambahkan Group!');window.location.href = '../create_group.php';</script>";
}
