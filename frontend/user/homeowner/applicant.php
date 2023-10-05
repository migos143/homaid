<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/homeowner.css">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid" style="margin: 0; padding: 0;">
        <nav class="navbar navbar-expand-lg"style="background-color: #000;">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">HOME<span style="color:#0A9DF0;">AID</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link text-white " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link text-white" id="reports" data-bs-toggle="dropdown" aria-expanded="false" href="#">CATEGORY</a>
                            <ul class="dropdown-menu bg-dark " aria-labelledby="reports">
                                <li><a class="dropdown-item text-white" href="#">BABYSITTER</a></li>
                                <li><a class="dropdown-item text-white" href="#">COOKING</a></li>
                                <li><a class="dropdown-item text-white" href="#">HANDLING CLOTHES</a></li>
                                <li><a class="dropdown-item text-white" href="#">HOUSEKEEPER</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">CHAT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="joblist.php">JOBLIST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="applicant.php">APPLICANTS</a>
                        </li>


                </div>
                <div class="">
                    <a class="text-white " href="#"><i class="bi bi-plus-circle  fa-lg"></i></a>
                </div>

                <a class="nav-link text-white " href="#" data-bs-toggle="dropdown">
                    <img src="../../../assets/img/Ivana.jpg" height="40" width="40" alt="P" class="rounded-circle">
                    <span class="ps-2 text-white">d. dragon</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-dark">
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center text-white" href="profile.php">
                            <i class="bi bi-person "></i>
                            <span>My Profile</span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center text-white" href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <section class="section mt-5 ">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card bg-dark text-white rounded">
                        <div class="card-body">
                            <h5 class="card-title">APPLICANTS</h5>


                            <!-- Table with stripped rows -->
                            <table class="table joblist text-white ">
                                <thead>
                                    <tr>

                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Skill</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">cute</th>
                                        <td>jelmero</td>
                                        <td>cooking</td>
                                        <td>
                                            <button style="cursor: pointer" type="button" class="btn btn-primary btn-sm">Hired</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">gwapo</th>
                                        <td>jelmero</td>
                                        <td>cooking</td>
                                        <td>
                                            <button style="cursor: pointer" type="button" class="btn btn-primary btn-sm">Hired</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">papart</th>
                                        <td>jelmero</td>
                                        <td>cooking</td>
                                        <td>
                                            <button style="cursor: pointer" type="button" class="btn btn-primary btn-sm">Hired</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">jven</th>
                                        <td>jelmero</td>
                                        <td>cooking</td>
                                        <td>
                                            <button style="cursor: pointer" type="button" class="btn btn-primary btn-sm">Hired</button>
                                        </td>

                                    </tr>
                                    <tr>
                                        <th scope="row">ivan</th>
                                        <td>jelmero</td>
                                        <td>cooking</td>
                                        <td>
                                            <button style="cursor: pointer" type="button" class="btn btn-primary btn-sm">Hired</button>
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
    </div>



    <!-- footer -->
    <footer>
        <div class="fixed-bottom  bg-dark p-0">
            <div class="footer-wrap row p-">
                <div class="col d-flex justify-content-center">
                    <h6 style="color:white">Copyright © HomeAID 2023</h6>
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>