<?php
date_default_timezone_set("Asia/Jakarta");

session_start();
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login

if (!isset($_SESSION['group_code'])) {
    echo "<script type='text/javascript'>alert('Anda Belum Login!');window.location.href='../login_group.php?act=masukgagal';</script>";
}

$id = $_SESSION["id_group"];
$groupname = $_SESSION["group_name"];
$groupcode = $_SESSION["group_code"];
$groupass = $_SESSION["group_password"];

?>
<?php
// Load file koneksi.php
include "../config/koneksi.php";
// group
$sql = $pdo->prepare("SELECT * FROM group_note WHERE id_group=:id");
$sql->bindParam(':id', $id);
$sql->execute();
$data = $sql->fetch();

//diskusi
$sql4 = $pdo->prepare("SELECT * FROM diskusi WHERE id_group=:id");
$sql4->bindParam(':id', $id);
$sql4->execute();
$data4 = $sql4->fetch();


//diskusi
$sql2 = $pdo->prepare("SELECT * FROM content WHERE id_group=:id");
$sql2->bindParam(':id', $id);
$sql2->execute();
$data2 = $sql2->fetch();

//content count
$sql5 = $pdo->prepare("SELECT count(*) FROM content WHERE id_group=:id");
$sql5->bindParam(':id', $id);
$sql5->execute();
$data5 = $sql5->fetchColumn();

//diskusi count
$sql3 = $pdo->prepare("SELECT count(*) FROM diskusi WHERE id_group=:id");
$sql3->bindParam(':id', $id);
$sql3->execute();
$data3 = $sql3->fetchColumn();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTNOTE | PAGE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="icon/png" href="../library/images/logo2.png" width="20" height="20">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../library/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../library/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .zoom:hover,
        .zoom:focus {
            -moz-box-shadow: 10px 10px 7px rgba(0, 0, 0, .7);
            -webkit-box-shadow: 10px 10px 7px rgba(0, 0, 0, .7);
            box-shadow: 10px 10px 7px rgba(0, 0, 0, .7);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.2);
            -o-transform: scale(1.2);
            position: relative;
            z-index: 5;
        }

        .zoom {
            -webkit-transform: rotate(-6deg);
            -o-transform: rotate(-6deg);
            -moz-transform: rotate(-6deg);
        }

        .zoom {
            text-decoration: none;
            color: #000;
            background: #ffc;
            display: block;
            padding: 1em;
            -moz-box-shadow: 5px 5px 7px rgba(33, 33, 33, 1);
            -webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, .7);
            box-shadow: 5px 5px 7px rgba(33, 33, 33, .7);
            -moz-transition: -moz-transform .15s linear;
            -o-transition: -o-transform .15s linear;
            -webkit-transition: -webkit-transform .15s linear;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Content</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../config/logout.php">LOGOUT <i class="fas fa-sign-out-alt"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="profile_group.php" class="brand-link">
                <img src="../library/images/logo2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SMARTNOTE</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../library/images/logo2.png" class="elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="profile_group.php" class="d-block"><?php echo $data['group_name']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="profile_group.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    GROUP
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#ini_adalah_halaman_content" class="nav-link bg-purple">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    CONTENT
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <img src="../library/images/logo2.png" alt="logosmartnote" height="50" width="50">
                            <h1>CONTENT</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Content</a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body pb-0">
                        <a href="form_content.php" class="btn btn-success mb-4"><i class="fa fa-plus-circle"></i> Create New Note</a>
                        <div class="row d-flex align-items-stretch">
                            <?php
                            // Include / load file koneksi.php
                            include "../config/koneksi.php";
                            // Buat query untuk menampilkan semua data siswa
                            $query = $pdo->prepare("SELECT * FROM content WHERE id_group=:id ORDER BY tanggal_buat ASC");
                            $query->bindParam(':id', $id);
                            $query->execute(); // Eksekusi querynya
                            $no = 1;
                            while ($row = $query->fetch()) { // Ambil semua data dari hasil eksekusi $sql
                            ?>
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch mt-4">
                                    <div class="card bg-light zoom">
                                        <i style="font-size:25px;" class="fa fa-thumbtack"></i>
                                        <div class="card-header text-muted border-bottom-0">
                                            <?php echo $data['group_name']; ?>
                                            <a href="../config/proses_hapus.php?id=<?php echo $row['id_content']; ?>" style="font-size:20px;" class="float-right btn-tool ml-2"><i class="fas fa-times"></i></a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="lead"><b><?php echo $row['judul_content']; ?></b></h2>
                                                    <p class="text-muted text-sm"><b>Isi Content</b> : <br><?php echo $row['isi_content']; ?>
                                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar"></i></span><?php $tgl = $row['tanggal_buat'];
                                                                                                                                            echo $tgl_lhrStr = date("d F Y", strtotime($tgl)); ?></li>
                                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-clock"></i></span> <?php echo $row['jam_buat']; ?></li>
                                                    </ul>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="../library/images/logo2.png" alt="" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <a href="profile_group.php" class="btn btn-sm bg-teal">
                                                    <i class="fas fa-comments"></i>
                                                </a>
                                                <a href="profile_group.php" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-users"></i> View Group
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <nav aria-label="Contacts Page Navigation">
                            <ul class="pagination justify-content-center m-0">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link" href="#">7</a></li>
                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="https://firmansyah.kel4.xyz"> Firmansyah</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../library/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../library/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../library/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../library/dist/js/demo.js"></script>
</body>

</html>