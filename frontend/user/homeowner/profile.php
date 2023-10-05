<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/homeowner.css">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid" style="margin: 0; padding: 0;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">HOME<span style="color:#0A9DF0;">AID</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link" id="reports" data-bs-toggle="dropdown" aria-expanded="false" href="#">CATEGORY</a>
                            <ul class="dropdown-menu bg-dark " aria-labelledby="reports">
                                <li><a class="dropdown-item text-white" href="#">BABYSITTER</a></li>
                                <li><a class="dropdown-item text-white" href="#">COOKING</a></li>
                                <li><a class="dropdown-item text-white" href="#">HANDLING CLOTHES</a></li>
                                <li><a class="dropdown-item text-white" href="#">HOUSEKEEPER</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CHAT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="joblist.php">JOBLIST</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="applicant.php">APPLICANTS</a>
                        </li>


                </div>
                <div class="">
                    <a class="text-white " href="#"><i class="bi bi-plus-circle  fa-lg"></i></a>
                </div>

                <a class="nav-link " href="#" data-bs-toggle="dropdown">
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


    <section class="h-100 gradient-custom-2">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-10 col-xl-10">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="../../../assets/img/Ivana.jpg" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                    Edit profile
                                </button>
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>Andy Horwitz</h5>
                                <p>New York</p>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5">253</p>
                                    <p class="small text-muted mb-0">Photos</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">1026</p>
                                    <p class="small text-muted mb-0">Followers</p>
                                </div>
                                <div>
                                    <p class="mb-1 h5">478</p>
                                    <p class="small text-muted mb-0">Following</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">Bio</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1">ADDRESS: USA CORDOVA </p>
                                    <p class="font-italic mb-1">CONTACT: 09123456789</p>
                                    <p class="font-italic mb-0">EMAIL: jelmerogwapo123@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Recent photos</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>