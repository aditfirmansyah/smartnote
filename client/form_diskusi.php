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
$sql10 = $pdo->prepare("SELECT * FROM group_note WHERE id_group=:id");
$sql10->bindParam(':id', $id);
$sql10->execute();
$data10 = $sql10->fetch();

//diskusi
$sql4 = $pdo->prepare("SELECT * FROM diskusi WHERE id_group=:id");
$sql4->bindParam(':id', $id);
$sql4->execute();
$data4 = $sql4->fetch();

//all content
$sql5 = $pdo->prepare("SELECT * FROM content WHERE id_group=:id");
$sql5->bindParam(':id', $id);
$sql5->execute();
$data5 = $sql5->fetch();

//content count
$sql2 = $pdo->prepare("SELECT count(*) FROM content WHERE id_group=:id");
$sql2->bindParam(':id', $id);
$sql2->execute();
$data2 = $sql2->fetchColumn();

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
    <title>SMARTNOTE | FORM EDIT DISKUSI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="icon/png" href="../library/images/logo2.png" width="20" height="20">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../library/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../library/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Form Edit Group</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="profile_group.php" class="brand-link">
                <img src="../library/images/logo2.png" alt="smartnotelogo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                        <a href="#" class="d-block"><?= $data10['group_name']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="profile_group.php" class="nav-link bg-purple">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    GROUP
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="page-group.php" class="nav-link">
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
                            <img src="../library/images/logo2.png" height="50" width="50" alt="Logo">
                            <h1>DISKUSI FORM</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="profile_group.php">Profile Group</a></li>
                                <li class="breadcrumb-item active">Form Edit Diskusi</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">FORM DISKUSI</h3>
                                </div>
                                <!-- /.card-header -->
                                <?php
                                // Load file koneksi.php
                                include "../config/koneksi.php";
                                // Ambil data ID yang dikirim oleh index.php melalui URL
                                $id = $_GET['id'];
                                // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
                                $sql = $pdo->prepare("SELECT * FROM diskusi WHERE id_diskusi=:id");
                                $sql->bindParam(':id', $id);
                                $sql->execute();
                                $data = $sql->fetch();
                                ?>

                                <!-- form start -->
                                <form role="form" action="../config/edit_diskusi.php" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="judul">Judul Content</label>
                                            <input type="hidden" required="3" name="id_diskusix" class="form-control" value="<?php echo $data['id_diskusi']; ?>">
                                            <input type="text" required="3" name="judul_diskusix" class="form-control" placeholder="Enter Judul Content" value="<?php echo $data['judul_content']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="isi">Isi Diskusi</label>
                                            <textarea required="3" class="form-control" placeholder="Enter Isi Diskusi" name="isi_diskusix"><?php echo $data['isi_diskusi']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="isi">Tanggal</label>
                                            <input type="text" required="3" name="tanggalx" class="form-control" placeholder="Enter Tanggal Diskusi" readonly value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="isi">Jam</label>
                                            <input type="text" required="3" name="jamx" class="form-control" placeholder="Enter Jam Diskusi" readonly value="<?php echo date('h : i : s : A'); ?>">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
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
    <!-- bs-custom-file-input -->
    <script src="../library/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../library/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../library/dist/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>