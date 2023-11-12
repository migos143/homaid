<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/homeowner.css">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid" style="margin: 0; padding: 0;">
        <nav class="navbar navbar-expand-lg " style="background-color: #000;">
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


    <section class="h-100 gradient-custom-2">
        <div class="container-fluid py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-10 col-xl-10">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row bg-dark" style=" height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="../../../assets/img/Ivana.jpg" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                            </div>
                            <div class="ms-3" style="margin-top: 130px;">
                                <h5>Andy Horwitz</h5>
                                <p>New York</p>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div class="px-1">
                                    <a href="chat2.php"><button type="button" class="btn btn-primary">Message</button></a>
                                </div>
                                <div class="px-1">
                                    <button type="button" class="btn btn-primary">Resume</button>
                                </div>
                                <div class="px-1">
                                    <button type="button" class="btn btn-primary">Validation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body row p-4 text-black">
                            <div class="mb-5 col-5 border bg-light">
                                <div class="p-5">
                                    <div class="information mb-5">
                                        <div class="mb-2">Rate: 000000</div>
                                        <div class="mb-2">Name: Jelmero Abano</div>
                                        <div class="mb-2">Age: 12</div>
                                    </div>
                                    <div class="skills">
                                        <div class="mb-2 fw-bold">Skill</div>
                                        <div class="mb-2 ms-4">+ Baby Setter</div>
                                        <div class="mb-2 ms-4">+ Kidnapper</div>
                                    </div>
                                </div>
                                <button class="float-end btn btn-sm btn-primary btn-outline-dark col-5">Hire</button>
                            </div>
                            <div class="mb-5 col-7 border bg-light">
                                <div class="p-3">
                                    <div class="form mb-5">
                                        <textarea name="comments" id="" cols="30" rows="4" class="form-control">

                                        </textarea>
                                        <button class="btn btn-sm btn-outline-info float-end mt-2">Comment</button>
                                    </div>
                                    <div class="comments mt-5 border p-3" style="height: 350px; overflow-y: scroll">
                                        <div class="commentCard border-bottom my-2">
                                            <div class="d-flex flex-start align-items-center">
                                                <img class="rounded-circle shadow-1-strong me-3" src="../../../assets/img/Ivana.jpg" alt="avatar" width="60" height="60" />
                                                <div>
                                                    <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                                    <p class="text-muted small mb-0">
                                                        Shared publicly - Jan 2020
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="mt-3 mb-4 p-3">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>