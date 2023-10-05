<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>applicant</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../assets/css/homeowner.css">
    <link href="/homaid/assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid p-0">
        <div class="container-fluid" style="margin: 0; padding: 0;">
            <nav class="navbar navbar-expand-lg " style="background-color: #000;">
                <div class="container-fluid text-white">
                    <a class="navbar-brand text-white" href="#">HOME<span style="color:#0A9DF0;">AID</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">CHAT</a>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link text-white" id="reports" data-bs-toggle="dropdown" aria-expanded="false" href="#">Notification</a>
                                <ul class="dropdown-menu bg-dark text-white p-4" aria-labelledby="reports" style="overflow-y: scroll; height: 100vh">
                                    <li class="dropdown-header">
                                        You have 4 new notifications
                                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-exclamation-circle text-warning"></i>
                                        <div>
                                            <h4>Lorem Ipsum</h4>
                                            <p>Quae dolorem earum veritatis oditseno</p>
                                            <p>30 min. ago</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-x-circle text-danger"></i>
                                        <div>
                                            <h4>Atque rerum nesciunt</h4>
                                            <p>Quae dolorem earum veritatis oditseno</p>
                                            <p>1 hr. ago</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-check-circle text-success"></i>
                                        <div>
                                            <h4>Sit rerum fuga</h4>
                                            <p>Quae dolorem earum veritatis oditseno</p>
                                            <p>2 hrs. ago</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li class="notification-item">
                                        <i class="bi bi-info-circle text-primary"></i>
                                        <div>
                                            <h4>Dicta reprehenderit</h4>
                                            <p>Quae dolorem earum veritatis oditseno</p>
                                            <p>4 hrs. ago</p>
                                        </div>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="#">Show all notifications</a>
                                    </li>


                                </ul>
                            </li>
                    </div>
                    <div class="">
                        <a class=" nav-link text-white " href="#"><i class="bi bi-plus-circle  fa-lg"></i></a>
                    </div>

                    <a class=" nav-link" href="#" data-bs-toggle="dropdown">
                        <img src="../../../assets/img/Ivana.jpg" height="40" width="40" alt="P" class="rounded-circle">
                        <span class="ps-2 text-white">d. dragon</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile bg-dark">
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center text-white" href="profile2.php">
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

        <div class="row vh-100">
            <div class="col-2 bg-dark">
                <div class="list-group list-group-flush my-3 text-center text-white mt-5">
                    <a href="" class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                        <i class="fas fa-house me-2"></i>CATEGORY
                    </a>
                    <a href="" class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                        <i class="fas fa-table-list me-2"></i>BABYSITTER
                    </a>
                    <a href="" class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                        <i class="fas fa-paw me-2"></i>COOKING
                    </a>
                    <a href="" class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                        <i class="fas fa-users me-2"></i>HANDLING CLOTHES
                    </a>
                    <a href="" class="list-group-item list-group-item-action bg-transparent text-white fw-bold">
                        <i class="fas fa-comment-dots me-2"></i>HOUSEKEEPER
                    </a>
                </div>
            </div>
            <div class="col-10">
                <div class="card bg-dark text-white my-2">
                    <div class="card-header d-flex justify-content-between">
                        <div class="img">

                            <img src="../../../assets/img/jane.jpg" height="50" width="50" alt="">
                        </div>
                        <div class="img">
                            <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                            <ul class="dropdown-menu" aria-labelledby="reports">
                                <li><a class="dropdown-item" href="#">report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary float-end">apply</a>
                    </div>
                </div>
                <div class="card bg-dark text-white my-2">
                    <div class="card-header d-flex justify-content-between">
                        <div class="img">

                            <img src="../../../assets/img/jane.jpg" height="50" width="50" alt="">
                        </div>
                        <div class="img">
                            <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                            <ul class="dropdown-menu" aria-labelledby="reports">
                                <li><a class="dropdown-item" href="#">report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary float-end">apply</a>
                    </div>
                </div>
                <div class="card bg-dark text-white my-2">
                    <div class="card-header d-flex justify-content-between">
                        <div class="img">

                            <img src="../../../assets/img/jane.jpg" height="50" width="50" alt="">
                        </div>
                        <div class="img">
                            <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                            <ul class="dropdown-menu" aria-labelledby="reports">
                                <li><a class="dropdown-item" href="#">report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary float-end">apply</a>
                    </div>
                </div>
                <div class="card bg-dark    text-white my-2">
                    <div class="card-header d-flex justify-content-between">
                        <div class="img">

                            <img src="../../../assets/img/jane.jpg" height="50" width="50" alt="">
                        </div>
                        <div class="img">
                            <div class="name" id="reports" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer">...</div>
                            <ul class="dropdown-menu" aria-labelledby="reports">
                                <li><a class="dropdown-item" href="#">report</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary float-end">apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>