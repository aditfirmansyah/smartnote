<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMARTNOTE | CREATE GROUP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="icon/png" href="library/images/logo2.png" width="20" height="20">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="library/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="library/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="library/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        /* Add animation to "page content" */
        .anime {
            position: relative;
            animation: mymove 3s;
        }

        @keyframes mymove {
            0% {
                top: 0px;
                right: 500px;
            }

            50% {
                top: 0px;
                right: 300px;
            }

            100% {
                top: 0px;
                right: 0px;
            }
        }

        /* ============= Animation background ========= */
        .background {
            background: linear-gradient(132deg, purple, grey, black);
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

        .text {
            font-family: fantasy;
            font-size: 30px;
            color: white;
        }

        .design {
            margin-top: 35%;
        }
    </style>
</head>

<body class="hold-transition login-page background">
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="anime">
        <div class="login-box design">
            <div class="login-logo text"><a href="index.php"><img src="library/images/logo.png" height="50px" width="50px"><b>
                        <font color="white">SMARTNOTES</font>
                    </b></a></div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg" style="color:black;"> Create New Your Group</p>
                    <form action="config/proses_simpan.php" method="post">
                        <div class="input-group mb-3"><input type="text" name="group_namex" required="3" class="form-control" placeholder="Enter Group Name">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-users"></span></div>
                            </div>
                        </div>
                        <div class="input-group mb-3"><input type="text" name="group_codex" readonly value="<?php echo "CD" . date('his'); ?>" class="form-control" placeholder="Enter Group Code">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-code"></span></div>
                            </div>
                        </div>
                        <div class="input-group mb-3"><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="3" name="group_passwordx" class="form-control" placeholder="Enter Group Password">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-lock"></span></div>
                            </div>
                        </div>
                        <div class="row float">
                            <!-- /.col -->
                            <div class="col-4">
                                <input type="submit" class="btn btn-success btn-block" value="Masuk">
                            </div>
                            <div class="col-4">
                                <input type="reset" class="btn btn-danger btn-block" value="Batal">
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <!-- /.social-auth-links -->
                    <p class="mt-2"><a href="login_group.php" class="text-center">Masuk Disini.</a></p>
                    <p class="mt-0"><a style="color: red;" href="index.php" class="text-center">Kembali Ke Halaman Utama.</a></p>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- login-box -->
    </div>
    <!-- anime -->
    <!-- jQuery -->
    <script src="library/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="library/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="library/dist/js/adminlte.min.js"></script>
</body>

</html>