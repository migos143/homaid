<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--bootstrap-->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!--css-->
  <link rel="stylesheet" href="index.css">
  <title>HOMEAID</title>
</head>

<body>
  <div class="container-fluid" id="homeaid" style="margin: 0; padding: 0;">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">HOME<span style="color:#0A9DF0;">AID</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#examplelogin">LOG IN</a>
              <div class="modal fade" id="examplelogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content ">
                    <div class="modal-body">
                      <button type="button" class="btn-close float-end " data-bs-dismiss="modal" aria-label="Close"></button>
                      <h5 class="modal-title text-center mt-3" id="exampleModalLabel">LOGIN</h5>
                      <input type="text" class="form-control mt-2" id="loginusername" placeholder="Username" aria-label="Username">
                      <input type="password" class="form-control mt-2" id="loginpassword" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button type="button" @click="loginForm" class="btn btn-dark">log in</button>
                    </div>
                    <div class="text-center">
                      <p class="">Already have an account? <a href="">Log in</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal homeowner -->
              <div class="modal fade" id="homeowner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">
                      <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                      <h5 class="modal-title text-center mt-4" id="exampleModalLabel">REGISTER</h5>
                      <input type="text" class="form-control mt-2" placeholder="Firstname" id="homeownerFirstname" aria-label="Firstname">
                      <input type="text" class="form-control mt-2" placeholder="Lastname" id="homeownerLastname" aria-label="Lastname">
                      <input type="text" class="form-control mt-2" placeholder="Username" id="homeownerUsername" aria-label="Username">
                      <label for="">Upload Picture</label>
                      <input type="file" class="form-control mt-2" id="homeownerpicture" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                      <label for="">Upload Valid ID</label>
                      <input type="file" class="form-control mt-2" id="homeownervalidId" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                      <input type="Password" class="form-control mt-2" placeholder="Password" id="homeownerPassword" aria-label="Password">
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button type="button" @click="registerForm(2)" class="btn btn-dark text-center">REGISTER</button>
                    </div>
                    <div class="text-center">
                      <p class="">Already have an account? <a href="">Log in</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal  applicant -->
              <div class="modal fade" id="applicant" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-body">

                      <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                      <h5 class="modal-title justify-content-center text-center mt-4" id="exampleModalLabel">REGISTER</h5>
                      <input type="text" class="form-control mt-2 rounded" placeholder="Firstname" id="applicantFirstname" aria-label="Firstname">
                      <input type="text" class="form-control mt-2" placeholder="Lastname" id="applicantLastname" aria-label="Lastname">
                      <input type="text" class="form-control mt-2" placeholder="Username" id="applicantUsername" aria-label="Username">
                      <label for="">Upload Picture</label>
                      <input type="file" class="form-control mt-2" id="applicantpicture" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                      <label for="">Upload Valid ID</label>
                      <input type="file" class="form-control mt-2" id="applicantvalidId" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                      <input type="Password" class="form-control mt-2" placeholder="Password" id="applicantPassword" aria-label="Password">
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button type="button" @click="applicantregisRerForm(1)" class="btn btn-dark">REGISTER</button>
                    </div>
                    <div class="text-center">
                      <p class="">Already have an account? <a href="">Log in</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                REGISTER
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#homeowner">HOMEOWNER</a>
                </li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#applicant">APPLICANTS</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="text-center">
      <img src="capture 1.png" class="img " alt="...">
    </div>
    <div class="text-center">
      <h2>Connecting Homeowner with Dependable Helpers</h2>
    </div>


    <footer>
      <div class=" fixed-bottom">
        <div class="footer-wrap row">
          <div class="col d-flex justify-content-center">
            <h6 style="color:white">Copyright © HomeAID 2023</h6>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="assets/js/bootstrap.js"></script>
  <script src="middleware/vue/vue.3.js"></script>
  <script src="middleware/vue/axios.js"></script>
  <script src="middleware/authentication.js"></script>
</body>

</html>