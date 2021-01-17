<?php
//penduduk
session_start();

$_SESSION['id_group']='';
$_SESSION['group_name']='';
$_SESSION['group_code']='';
$_SESSION['group_password']='';

unset($_SESSION['id_group']);
unset($_SESSION['group_name']);
unset($_SESSION['group_code']);
unset($_SESSION['group_password']);

session_unset();
session_destroy();
 echo "<script type='text/javascript'>alert('Anda Telah Logout, Sampai Jumpa!');window.location.href = '../login_group.php';</script>";
?>