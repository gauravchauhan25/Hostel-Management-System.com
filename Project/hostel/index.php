<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <head>
            <title>Log In</title>

            <script src="../assets/js/color-modes.js"></script>

            <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
            <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">


            <!-- Custom styles for this template -->
            <link href="css/sign-in.css" rel="stylesheet">
            <link href="css/dashboard.css" rel="stylesheet">
            <link rel="stylesheet" href="css/style.css">

            <style>
                  .row {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                        margin-left: 250px;
                        margin-right: 50px;
                  }

                  .bi {
                        vertical-align: -.125em;
                        fill: currentColor;
                  }

                  .btn-bd-primary {
                        --bd-violet-bg: #712cf9;
                        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

                        --bs-btn-font-weight: 600;
                        --bs-btn-color: var(--bs-white);
                        --bs-btn-bg: var(--bd-violet-bg);
                        --bs-btn-border-color: var(--bd-violet-bg);
                        --bs-btn-hover-color: var(--bs-white);
                        --bs-btn-hover-bg: #6528e0;
                        --bs-btn-hover-border-color: #6528e0;
                        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                        --bs-btn-active-color: var(--bs-btn-hover-color);
                        --bs-btn-active-bg: #5a23c8;
                        --bs-btn-active-border-color: #5a23c8;
                  }

                  .btn-primary {
                        --bs-btn-color: #fff;
                        --bs-btn-bg: #0d6efd;
                        --bs-btn-border-color: #0d6efd;
                        --bs-btn-hover-color: #fff;
                        --bs-btn-hover-bg: #0b5ed7;
                        --bs-btn-hover-border-color: #0a58ca;
                        --bs-btn-focus-shadow-rgb: 49, 132, 253;
                        --bs-btn-active-color: #fff;
                        --bs-btn-active-bg: #0a58ca;
                        --bs-btn-active-border-color: #0a53be;
                        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                        --bs-btn-disabled-color: #fff;
                        --bs-btn-disabled-bg: #0d6efd;
                        --bs-btn-disabled-border-color: #0d6efd;
                  }

                  .logo {
                        position: absolute;
                        top: 20px;
                        left: 1400px;
                  }

                  body {
                        font-family: 'Times New Roman', Times, serif;
                  }
            </style>
      </head>

<body>

      <!-- Creation of navbar -->
      <!-- navbar navbar-expand-lg bg-body-tertiary rounded sticky-top bg-dark flex-md-nowrap shadow -->

      <nav class="navbar navbar-dark bg-dark shadow sticky-top" aria-label="Dark offcanvas navbar">
            <div class="container-fluid">
                  <a class="nav-link active" href="#" style="font-size: 23px;">Maharaja Surajmal Institute</a>

                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel" style="font-size: 19px; font-family: Georgia, 'Times New Roman', Times, serif">
                        <div class="offcanvas-header">
                        <a class="nav-link active" href="#" style="font-size: 23px;">Hostel Management System</a>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body">
                              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="www.msijanakpuri.com">
                                                <svg class="bi">
                                                      <use xlink:href="#house-fill" />
                                                </svg> Home
                                          </a>
                                    </li>

                                    <li class="nav-item">
                                          <a class="nav-link active" aria-current="page" href="hostel.php">
                                                New Registration!
                                          </a>
                                    </li>

                              </div>
                  </div>
            </div>
      </nav>



      <?php include('includes/logo.php'); ?>

      <!-- style="position: relative; top: 60px; -->
      <div class="login-page bk-img">
            <div class="form-content ">
                  <div class="container" style="position: relative; top: 100px;">
                        <div class="d-lg-flex justify-content-lg-end">
                              <div class="col-md-4 col-md-offset-3 ">

                                    <form action="log-in.php" method="post">
                                          <div class="container-fluid" style="text-align: center;">
                                                <img src="img/msi.png" alt="MSI" width="130" height="130"><br />
                                          </div>

                                          <h2 class="h3 mb-3 fw-normal">
                                                Please log in
                                          </h2>

                                          <div class="form-floating" style="font-size: 15px;">
                                                <input type="email" name="email" class="form-control" id="email">
                                                <label for="floatingInput">Email address</label>
                                          </div>

                                          <div class="form-floating" style="font-size: 15px;">
                                                <input type="password" name="password" class="form-control" id="password">
                                                <label for="floatingInput">Password</label>
                                          </div><br>

                                          <p class="mb-3 fw-normal" style="font-size: 16px;">Don't have a account?
                                                <a href="hostel.php">Register</a>
                                          </p>

                                          <button class="btn btn-primary w-100 py-2" type="submit" action="submit()">Log in</button><br><br>

                                          <div class="form-floating" style="font-size: 18px; text-align: center;">
                                                <a href="forgot_password.php">Forgot Password?</a>
                                          </div>
                                          <br><br>
                                    </form>

                              </div>
                        </div>
                  </div>
            </div>
      </div>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>