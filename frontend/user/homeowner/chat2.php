<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
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
                    <span class="navbar-toggler-icon text-white"></span>
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
                    <a class="text-white " href="post.php"><i class="bi bi-plus-circle  fa-lg"></i></a>
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

    <section class="gradient-custom">
        <div class="container py-3 mt-2 bg-dark">

            <div class="row">

                <div class="col-md-6 col-lg-5 col-xl-5 mb-4 mb-md-0">

                    <h5 class="font-weight-bold mb-3 text-center text-white">Member</h5>

                    <div class="card mask-custom">
                        <div class="card-body">

                            <ul class="list-unstyled mb-0">
                                <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-dark">
                                        <div class="d-flex flex-row text-dark">
                                            <img src="../../../assets/img/Ivana.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                            <div class="pt-1 ">
                                                <p class="fw-bold mb-0">John Doe</p>
                                                <p class="small text-dark">Hello, Are you there?</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-dark mb-1">Just now</p>
                                            <span class="badge bg-danger float-end">1</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-dark">
                                        <div class="d-flex flex-row">
                                            <img src="../../../assets/img/jane.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Danny Smith</p>
                                                <p class="small text-dark">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-dark mb-1">5 mins ago</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom " style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-dark">
                                        <div class="d-flex flex-row">
                                            <img src="../../../assets/img/jane.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Alex Steward</p>
                                                <p class="small text-dark">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-dark mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-dark">
                                        <div class="d-flex flex-row">
                                            <img src="../../../assets/img/Ivana.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Ashley Olsen</p>
                                                <p class="small text-dark">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-dark mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-dark">
                                        <div class="d-flex flex-row">
                                            <img src="../../../assets/img/jane.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Kate Moss</p>
                                                <p class="small text-dark">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-dark mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2 border-bottom" style="border-bottom: 1px solid rgba(255,255,255,.3) !important;">
                                    <a href="#!" class="d-flex justify-content-between link-dark">
                                        <div class="d-flex flex-row">
                                            <img src="../../../assets/img/Ivana.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Lara Croft</p>
                                                <p class="small text-dark">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-dark mb-1">Yesterday</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#!" class="d-flex justify-content-between link-dark">
                                        <div class="d-flex flex-row">
                                            <img src="../../../assets/img/jane.jpg" alt="avatar" class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                                            <div class="pt-1">
                                                <p class="fw-bold mb-0">Brad Pitt</p>
                                                <p class="small text-dark">Lorem ipsum dolor sit.</p>
                                            </div>
                                        </div>
                                        <div class="pt-1">
                                            <p class="small text-dark mb-1">5 mins ago</p>
                                            <span class="text-white float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-lg-7 col-xl-7">

                    <ul class="list-unstyled text-white">
                        <li class="d-flex justify-content-between mb-4">
                            <img src="../../../assets/img/jane.jpg" alt="avatar" class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card mask-custom">
                                <div class="card-header d-flex justify-content-between p-3" style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                    <p class="fw-bold mb-0 text-dark">Brad Pitt</p>
                                    <p class="text-dark small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0 text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <div class="card mask-custom w-100">
                                <div class="card-header d-flex justify-content-between p-3" style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                    <p class="fw-bold mb-0 text-dark">Lara Croft</p>
                                    <p class="text-dark small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0 text-dark">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium.
                                    </p>
                                </div>
                            </div>
                            <img src="../../../assets/img/Ivana.jpg" alt="avatar" class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                        </li>
                        <li class="d-flex justify-content-between mb-4">
                            <img src="../../../assets/img/jane.jpg" alt="avatar" class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                            <div class="card mask-custom">
                                <div class="card-header d-flex justify-content-between p-3" style="border-bottom: 1px solid rgba(255,255,255,.3);">
                                    <p class="fw-bold mb-0 text-dark">Brad Pitt</p>
                                    <p class="text-dark small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0 text-dark    ">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3">
                            <div class="form-outline form-white">
                                <textarea class="form-control" id="textAreaExample3" rows="4" placeholder="Massage"></textarea>
                            </div>
                        </li>
                        <button type="button" class="btn btn-light  btn-lg btn-rounded float-end">Send</button>
                    </ul>

                </div>

            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>