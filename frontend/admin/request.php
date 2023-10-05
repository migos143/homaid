<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Homeaid Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/homaid/assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/homaid/assets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/homaid/assets/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center   ">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">HOMEAID</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->



        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">


                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="/homaid/assets/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Mr. ADMIN</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6>
                            <span>homeowner</span>
                        </li>
                        
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <?php include('sidebar.php'); ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>REQUEST</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">request</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">list of request</h5>


                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>

                                        <th scope="col">FullName</th>
                                        <th scope="col">Picture</th>
                                        <th scope="col">Valid id</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">cute</th>
                                        <td></td>
                                        <td>12/23/23</td>
                                        <td>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-primary btn-sm">accept</button>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-danger btn-sm">cancel</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">gwapo</th>
                                        <td></td>
                                        <td>01/12/23</td>
                                        <td>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-primary btn-sm">accept</button>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-danger btn-sm">cancel</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">papart</th>
                                        <td></td>
                                        <td>23/23/23</td>
                                        <td>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-primary btn-sm">accept</button>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-danger btn-sm">cancel</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">jven</th>
                                        <td></td>
                                        <td>02/23/23</td>
                                        <td>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-primary btn-sm">accept</button>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-danger btn-sm">cancel</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">ivan</th>
                                        <td></td>
                                        <td>01/12/12</td>
                                        <td>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-primary btn-sm">accept</button>
                                            <button style="cursor: pointer" type="button"
                                                class="btn btn-danger btn-sm">cancel</button>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                           
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/homaid/assets/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/homaid/assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/homaid/assets/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/homaid/assets/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/homaid/assets/assets/vendor/quill/quill.min.js"></script>
    <script src="/homaid/assets/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/homaid/assets/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/homaid/assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/homaid/assets/assets/js/main.js"></script>

</body>

</html>