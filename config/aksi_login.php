<?php
date_default_timezone_set("Asia/Jakarta");
$koneksi = mysqli_connect("localhost", "root", "", "smartnote");

//cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_error();
}

$user = $_POST['group_codex'];
$pass = $_POST["group_pwdx"];
$sql = mysqli_query($koneksi, "select * from group_note where group_code='$user' && group_password='$pass'");
$data = $sql->fetch_assoc();
$code = $data['group_code'];
$password = $data['group_password'];

if ($code === $user && $password === $pass) {
    session_start();
    $_SESSION["id_group"] = $data["id_group"];
    $_SESSION["group_name"] = $data["group_name"];
    $_SESSION["group_code"] = $code;
    $_SESSION["group_password"] = $password;
    echo "<script type='text/javascript'>alert('Halo Selamat Datang!');window.location.href = '../client/profile_group.php';</script>";
} else {
    header('location:../login_group.php?error=password&&codetidakvalid');
}
