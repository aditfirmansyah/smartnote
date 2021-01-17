<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SMARTNOTE - BERANDA</title>
    <link rel="icon" type="icon/png" href="library/images/logo2.png" width="20" height="20">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="library/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="library/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .nav-link {
            text-transform: uppercase;
        }

        .active::after {
            content: '';
            display: block;
            border-bottom: 3px solid black;
            width: 60%;
            margin: auto;
            padding-bottom: 5px;
            margin-bottom: -8px;
        }

        .nav-link:hover::after {
            content: '';
            display: block;
            border-bottom: 3px solid black;
            width: 60%;
            margin: auto;
            padding-bottom: 5px;
            margin-bottom: -8px;
        }

        .text {
            padding: 50px 50px;
        }

        .iconic {
            margin-top: 4%;
            font-size: 60px;
        }

        /* ============= Animation background ========= */
        .background {
            background: linear-gradient(132deg, #FC415A, #591BC5, #212335);
            background-size: 400% 400%;
            animation: Gradient 15s ease infinite;
            position: relative;
            height: 96%;
            width: 100%;
            overflow: hidden;
            padding: 0;
            margin: 0px;
            margin-bottom: 4%;
            color: white;
            border-radius: 10px;
        }

        .background2 {
            background: linear-gradient(132deg, orange, #591BC5, cyan);
            background-size: 400% 400%;
            animation: Gradient 15s ease infinite;
            position: relative;
            height: 96%;
            width: 100%;
            overflow: hidden;
            padding: 0;
            margin: 0px;
            margin-bottom: 4%;
            color: white;
            border-radius: 10px;
        }

        .cube {
            position: absolute;
            top: 80vh;
            left: 45vw;
            width: 10px;
            height: 10px;
            border: solid 1px #D7D4E4;
            transform-origin: top left;
            transform: scale(0) rotate(0deg) translate(-50%, -50%);
            animation: cube 12s ease-in forwards infinite;
        }

        .cube:nth-child(2n) {
            border-color: #FFF;
        }

        .cube:nth-child(2) {
            animation-delay: 2s;
            left: 25vw;
            top: 40vh;
        }

        .cube:nth-child(3) {
            animation-delay: 4s;
            left: 75vw;
            top: 50vh;
        }

        .cube:nth-child(4) {
            animation-delay: 6s;
            left: 90vw;
            top: 10vh;
        }

        .cube:nth-child(5) {
            animation-delay: 8s;
            left: 10vw;
            top: 85vh;
        }

        .cube:nth-child(6) {
            animation-delay: 10s;
            left: 50vw;
            top: 10vh;
        }

        /* Animate Background*/
        @keyframes Gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes cube {
            from {
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
                opacity: 1;
            }

            to {
                transform: scale(20) rotate(960deg) translate(-50%, -50%);
                opacity: 0;
            }
        }

        /* Add animation to "page content" */
        .custom {
            position: relative;
            animation: mymove 3s;
        }

        .custom2 {
            position: relative;
            animation: mymove2 3s;
        }

        @keyframes mymove {
            0% {
                top: 0px;
                right: 200px;
            }

            50% {
                top: 0px;
                right: 200px;
            }

            100% {
                top: 0px;
                right: 0px;
            }
        }

        @keyframes mymove2 {
            0% {
                top: 0px;
                left: 200px;
            }

            50% {
                top: 0px;
                left: 200px;
            }

            100% {
                top: 0px;
                left: 0px;
            }
        }

        .fade-in {
            animation: fadeIn ease 2s;
            -webkit-animation: fadeIn ease 2s;
            -moz-animation: fadeIn ease 2s;
            -o-animation: fadeIn ease 2s;
            -ms-animation: fadeIn ease 2s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-o-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @-ms-keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @media (min-width: 484px) and (max-width: 767.98px) {
            .background {
                height: 96%;
            }

            .jarak {
                margin-bottom: 20px;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .background {
                height: 96%;
            }

            .jarak {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img style="margin-top:2px;" src="library/images/logo.png" alt="SMARTNOTE LOGO" class="brand-image" style="margin-top:2px; opacity: .8">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="tutorial.php" class="nav-link">Tutorial</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a class="nav-link" href="login_group.php">LOGIN GROUP <i class="fas fa-sign-in-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="font-family: fantasy" class="m-0 text-dark"><img src="library/images/logo.png" height="50px" width="50px">ONLINE SMART NOTE</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Beranda</li>
                                <li class="breadcrumb-item "><a href="tutorial.php">Tutorial</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="background">
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="cube"></div>
                                <div class="text">
                                    <h1 class="display-4">Selamat Datang!</h1>
                                    <p class="lead">Online Smart Note, melakukan catatan dengan teman kamu, memudahkan dalam membuat catatan bersama teman.</p>
                                    <p class="lead"><a href="create_group.php" class="btn btn-success justify-content-sm-center">Create Group</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content mt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-2">
                            <div class="custom">
                                <div class="fade-in">
                                    <div class="card text-center background2">
                                        <div class="card-body">
                                            <i class="iconic fa fa-clock"></i>
                                            <p class="card-text">
                                                <br>Realtime Proses
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom">
                                <div class="fade-in">
                                    <div id="slide-up" class="card text-center background2">
                                        <div class="card-body">
                                            <i class="iconic fa fa-sticky-note"></i>
                                            <p class="card-text">
                                                <br>Easy Note Create
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom2">
                                <div class="fade-in">
                                    <div class="card text-center background2">
                                        <div class=" card-body">
                                            <i class="iconic fa fa-lock"></i>
                                            <p class="card-text">
                                                <br>Keamanan Terjaga
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="custom2">
                                <div class="fade-in">
                                    <div class="card text-center background2">
                                        <div class="card-body">
                                            <i class="iconic fa fa-globe"></i>
                                            <p class="card-text">
                                                <br>Online Group
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <div class="content mt-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">DEFINISI NOTE</h5>
                                    <br style="margin-top: 10px;">
                                    <hr>
                                    <p class="card-text">
                                        NOTE adalah buku yang ukurannya lebih kecil dari pada buku tulis, untuk mencatat hal yang dianggap penting biasanya lembarannya dapat atau mudah dilepaskan (buku catatan).
                                    </p>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <h5 class="card-title">TUJUAN SMART NOTE</h5>
                                    <br style="margin-top: 10px;">
                                    <hr>
                                    <p class="card-text">
                                        Tujuan <b>SMARTNOTE</b> ini dibangun untuk membuat kita lebih smart dan juga memudahkan kita tanpa membutuhkan kertas. <b>SMARTNOTE</b> ini dibangun juga dapat bekerja secara berkelompok. hanya dengan masukan kode group dan password group.
                                    </p>
                                </div>
                            </div><!-- /.card -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Featured</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">ONLINE SMART NOTE</h6>
                                    <br>
                                    <p class="card-text mt-2">
                                        1. Waktu Akses Sangat Cepat <br>
                                        2. Bekerja Realtime <br>
                                        3. User Friendly <br>
                                        4. Keamanan <br>
                                        5. Free <br>
                                    </p>
                                </div>
                            </div>
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0">How to use ?</h5>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">NEEDS LEARN OR NO ?</h6>
                                    <br>
                                    <p class="card-text">click button to following this step how to create group and content.</p>
                                    <a href="tutorial.php" class="btn btn-primary">Click me</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
            <div class="content mt-4">
                <div class="container">
                    <div class="row">
                        <!-- Container (Portfolio Section) -->
                        <div class="container-fluid text-center bg-grey">
                            <h2>PORTOFOLIO</h2><br>
                            <h4>What we have created</h4>
                            <div class="row text-center slideanim">
                                <div class="col-sm-4 jarak">
                                    <div class="thumbnail">
                                        <img src="library/images/slide2.jpg" alt="Paris" width="300" height="200">
                                    </div>
                                </div>
                                <div class="col-sm-4 jarak">
                                    <div class="thumbnail">
                                        <img src="library/images/slide4.png" alt="Paris" width="300" height="200">
                                    </div>
                                </div>
                                <div class="col-sm-4 jarak">
                                    <div class="thumbnail">
                                        <img src="library/images/slide3.jpg" alt="Paris" width="300" height="200">
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- /.content-wrapper -->
            <br>
            <br>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            <footer class="main-footer text-left">
                <!-- Default to the right -->
                <strong>Copyright &copy; 2021 <a href="https://firmansyah.kel4.xyz"> Firmansyah</a>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->

        <!-- jQuery -->
        <script src="library/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="library/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="library/dist/js/adminlte.min.js"></script>
</body>

</html>