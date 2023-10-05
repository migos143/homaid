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
                                <div class="px-3">
                                    <button type="button" class="btn btn-primary">Resume</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary">Validation</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">RATE:</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <p class="font-italic mb-1">NAME:jelmerogwapo123 </p>
                                    <p class="font-italic mb-1">AGE:60</p>
                                    <p class="font-italic mb-0">skill</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">comments</p>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-2">
                                    <div class="card bg-dark text-white my-2">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="img ">
                                                <img src="../../../assets/img/jane.jpg" height="50" width="50" alt=""><span class:="mx-2">jelmerogwapo123</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Rate:</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>

                                    <div class="card bg-dark text-white my-2">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="img ">
                                                <img src="../../../assets/img/jane.jpg" height="50" width="50" alt=""><span class:="mx-2">jelmerogwapo123</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Rate:</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        </div>
                                    </div>

                                    <div class="card bg-dark text-white my-2">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="img ">
                                                <img src="../../../assets/img/jane.jpg" height="50" width="50" alt=""><span class:="mx-2">jelmerogwapo123</span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">Rate:</h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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