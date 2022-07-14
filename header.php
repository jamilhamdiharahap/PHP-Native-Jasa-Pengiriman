<?php
session_start();
if (isset($_SESSION['admin'])) :
    header("location:./admin/index-admin.php");
endif;

if (isset($_SESSION['user'])) :
    header("location:./user/index.php");
endif;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="view/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="view/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="view/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="view/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-3 ">
                        <div class="site-logo">
                            <a href="./index.php">CarRent</a>
                        </div>
                    </div>
                    <div class="col-9  text-right">
                        <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a>
                        </span>
                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li><a href="index.php" class="nav-link">Home</a></li>
                                <li><a href="./services.php" class="nav-link">Services</a></li>
                                <li><a href="./cars.php" class="nav-link">Cars</a></li>
                                <li><a href="./about.php" class="nav-link">About</a></li>
                                <li><a href="./blog.php" class="nav-link">Blog</a></li>
                                <li><a href="./contact.php" class="nav-link">Contact</a></li>
                                <style>
                                    .hov:hover {
                                        background-color: blue;
                                    }
                                </style>
                                <li><a class="hov" href="#loginModal" data-toggle="modal" style="border: 1px solid blue;border-radius:30px;padding:6px 13px 6px 13px;margin:5px;">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <style>
        .container {
            padding: 2rem 0rem;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 400px;
            }

            .modal-dialog .modal-content {
                padding: 1rem;
            }
        }

        .modal-header .close {
            margin-top: -1.5rem;
        }

        .form-title {
            margin: -2rem 0rem 2rem;
        }

        .btn-round {
            border-radius: 3rem;
        }

        .delimiter {
            padding: 1rem;
        }

        .social-buttons .btn {
            margin: 0 0.5rem 1rem;
        }

        .signup-section {
            padding: 0.3rem 0rem;
        }
    </style>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <form action="cekLogin.php" method="POST">
                            <div class="form-group">
                                <input type="email" name="user" class="form-control" id="email1" placeholder="Your email address...">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" class="form-control" id="password1" placeholder="Your password...">
                            </div>
                            <button type="submit" name="sumbit" class="btn btn-info btn-block btn-round">Login</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Not a member yet? <a href="#registerEmployeeModal" class="text-info" data-toggle="modal"> Sign Up</a>.</div>
                </div>
            </div>
        </div>
    </div>
    <div id="registerEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="./register.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>NAMA</label>
                            <input type="text" name="nama" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>ALAMAT</label>
                            <input class="form-control" name="alamat" required autocomplete="off" required></input>
                        </div>
                        <div class="form-group">
                            <label>JENIS KELAMIN</label>
                            <select name="gender">
                                <option value="LAKI-LAKI">laki-laki</option>
                                <option value="PEREMPUAN">perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="email" name="email" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>PASSWORD</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="insertMobil" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="view/js/jquery-3.3.1.min.js"></script>
    <script src="view/js/popper.min.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script src="view/js/owl.carousel.min.js"></script>
    <script src="view/js/jquery.sticky.js"></script>
    <script src="view/js/jquery.waypoints.min.js"></script>
    <script src="view/js/jquery.animateNumber.min.js"></script>
    <script src="view/js/jquery.fancybox.min.js"></script>
    <script src="view/js/jquery.easing.1.3.js"></script>
    <script src="view/js/bootstrap-datepicker.min.js"></script>
    <script src="view/js/aos.js"></script>

    <script src="view/js/main.js"></script>
</body>

</html>