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
    <title>SMARTNOTE | GROUP PROFILE</title>
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
                    <a href="profile_group.php" class="nav-link">Group Profile</a>
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
            <a href="#this_page_active" class="brand-link">
                <img src="../library/images/logo2.png" alt="smartnote logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                        <a href="#ini_adalah_halaman_profile_group" class="d-block"><?php echo $data['group_name']; ?></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#ini_adalah_halaman_profile_group" class="nav-link bg-purple">
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
                            <img src="../library/images/logo2.png" height="50" width="50" alt="logo">
                            <h1>PROFILE</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="../library/images/logo2.png" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center"><?php echo $data['group_name']; ?></h3>

                                    <p class="text-muted text-center"><?php echo $data['group_code']; ?></p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Content</b> <a class="float-right"><?php echo $data2; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Diskusi</b> <a class="float-right"><?php echo $data3; ?></a>
                                        </li>
                                    </ul>
                                    <a href="group_edit.php?id=<?php echo $id; ?>" class="btn btn-primary btn-block"><b><i class="fa fa-edit"></i> EDIT PROFILE</b></a>
                                    <a href="page-group.php" class="btn btn-success btn-block"><b><i class="fa fa-plus-circle"></i> CREATE NEW NOTE</b></a>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#diskusi" data-toggle="tab">Create New Discussion</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <?php
                                            // Include / load file koneksi.php
                                            include "../config/koneksi.php";
                                            // Buat query untuk menampilkan semua data siswa
                                            $query = $pdo->prepare("SELECT * FROM diskusi WHERE id_group=:id ORDER BY tanggal ASC");
                                            $query->bindParam(':id', $id);
                                            $query->execute(); // Eksekusi querynya
                                            $no = 1;
                                            while ($row = $query->fetch()) { // Ambil semua data dari hasil eksekusi $sql
                                            ?>
                                                <!-- Post -->
                                                <div class="post">
                                                    <div class="user-block">
                                                        <img class="img-circle img-bordered-sm" src="../library/images/logo2.png" alt="user image">
                                                        <span class="username">
                                                            <a href="#"><?php echo $data['group_name']; ?></a>
                                                            <a href="../config/proses_hapus_diskusi.php?id=<?php echo $row['id_diskusi']; ?>" class=" float-right btn-tool"><i class="fas fa-times"></i></a>
                                                        </span>
                                                        <span class="description">Shared publicly - <?php echo $row['jam']; ?></span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <h5><?= $row['judul_content']; ?></h5>
                                                    <p>
                                                        <?= $row['isi_diskusi']; ?>
                                                    </p>

                                                    <p>
                                                        <a href="form_diskusi.php?id=<?php echo $row['id_diskusi']; ?>" class="link-black text-sm mr-2"><i class="fas fa-edit mr-1"></i> Edit</a>
                                                    </p>
                                                </div>
                                                <!-- /.post -->
                                            <?php } ?>
                                        </div>
                                        <!-- //diskusi -->
                                        <div class="tab-pane" id="diskusi">
                                            <form class="form-horizontal" action="../config/tambah_diskusi.php" method="POST">
                                                <div class="form-group row">
                                                    <label for="judul" class="col-sm-2 col-form-label">Judul Content</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" required="2" class="form-control" value="<?php echo $id; ?>" name="id_groupx" id="id">
                                                        <input type="hidden" required="2" class="form-control" value="<?php echo date('dmYhis'); ?>" name="id_diskusix" id="id_diskusi">
                                                        <input type="text" required="2" class="form-control" name="judulx" id="judul" placeholder="Enter Judul Content">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="isi" class="col-sm-2 col-form-label">Isi Diskusi</label>
                                                    <div class="col-sm-10">
                                                        <textarea required="3" class="form-control" name="isi_diskusix" placeholder="Enter Your Discussion"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="tanggalx" readonly value="<?php echo date('Y-m-d'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="jamx" readonly value="<?php echo date('h : i : s : A'); ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                        <button type="reset" class="btn btn-danger">Batal</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                        <!-- /.col -->
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
    <!-- AdminLTE App -->
    <script src="../library/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../library/dist/js/demo.js"></script>
</body>

</html>