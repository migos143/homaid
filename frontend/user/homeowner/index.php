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
        <nav class="navbar navbar-expand-lg  " style="background-color: #000;">
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
                            <a class="nav-link text-white" href="chat2.php">CHAT</a>
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

    <div class="container mt-1">
        <div class="row justify-content-start ">
            <div class=" col-8 col-sm-4 col-lg-4">
                <img src="../../../assets/img/home page.PNG" alt="">
            </div>
            <div class="home col-8 col-sm-8 col-lg-8 mt-5">
                <h1>Home<span style="color:#0A9DF0;">AID</span></h1>
                <p>homeaid can provide a convenient way to find and connect with helpers who have the skills and
                    experience you need.
                    By providing a reliable service, homeaid can help save homeowners time and reduce the stress of
                    finding someone trustworthy to work in their home.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card mx-2 my-2 bg-dark text-white" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../../../assets/img/Ivana.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="info">
                                <div class="card-text d-flex justify-content-between mb-3">
                                    <div class="name">Name:</div>
                                    <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                                    <ul class="dropdown-menu" aria-labelledby="reports">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">report</a></li>
                                    </ul>
                                </div>
                                <p class="card-text">Age:</p>
                                <p class="card-text">Rate:</p>
                                <a href="viewprofile.php">
                                    <button type="button" class="btn btn-info btn-sm mt-4 float-end" >view profile</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mx-2 my-2 bg-dark text-white" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../../../assets/img/Ivana.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="info">
                                <div class="card-text d-flex justify-content-between mb-3">
                                    <div class="name">Name:</div>
                                    <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                                    <ul class="dropdown-menu" aria-labelledby="reports">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">report</a></li>
                                    </ul>
                                </div>
                                <p class="card-text">Age:</p>
                                <p class="card-text">Rate:</p>
                                <a href="viewprofile.php">
                                    <button type="button" class="btn btn-info btn-sm mt-4 float-end" >view profile</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mx-2 my-2 bg-dark text-white" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../../../assets/img/Ivana.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="info">
                                <div class="card-text d-flex justify-content-between mb-3">
                                    <div class="name">name:</div>
                                    <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                                    <ul class="dropdown-menu" aria-labelledby="reports">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">report</a></li>
                                    </ul>
                                </div>
                                <p class="card-text">age:</p>
                                <p class="card-text">rate:</p>
                                <a href="viewprofile.php">
                                    <button type="button" class="btn btn-info btn-sm mt-4 float-end" >view profile</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mx-2 my-2 bg-dark text-white" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../../../assets/img/Ivana.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="info">
                                <div class="card-text d-flex justify-content-between mb-3">
                                    <div class="name">name:</div>
                                    <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                                    <ul class="dropdown-menu" aria-labelledby="reports">
                                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="#">report</a></li>
                                    </ul>
                                </div>
                                <p class="card-text">age:</p>
                                <p class="card-text">rate:</p>
                                <a href="viewprofile.php">
                                    <button type="button" class="btn btn-info btn-sm mt-4 float-end" >view profile</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- modal -->
    <div class="modal fade modal-centered" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="  bg-dark p-0">
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