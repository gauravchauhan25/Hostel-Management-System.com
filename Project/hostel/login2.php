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
                        margin-left: 190px;
                        margin-right: 10px;
                        padding: 5px;
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
      <nav class="navbar navbar-expand-lg bg-body-tertiary rounded sticky-top p-0 bg-dark flex-md-nowrap shadow" aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                  <div class="collapse navbar-collapse d-lg-flex">
                        <h1 class="col-lg-3 me-0" style="font-size: 25px;">&nbsp;Maharaja Surajmal Institute</h1>
                        <ul class="navbar-nav col-lg-8  d-lg-flex justify-content-lg-end" style="font-size: 19px;">

                              <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="www.msijanakpuri.com">
                                          <svg class="bi">
                                                <use xlink:href="#house-fill" />
                                          </svg> Home
                                    </a>
                              </li>
                              <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>

                              <li class="nav-item">
                                    <a class="nav-link active" href="about-us.php">About Us</a>
                              </li>

                        </ul>
                  </div>
            </div>
      </nav>

      <?php include('includes/logo.php'); ?>


      <div class="login-page bk-img" style="background-image: url(img/hostel.jfif);">
            <div class="form-content ">
                  <div class="container ">
                        <div class="d-lg-flex justify-content-lg-end">
                              <div class="col-md-7 col-md-offset-3 ">
                                    <h1 class="text-center text-bold text-light mt-2x"></h1>
                                    <div class="well row bk-light">
                                          <div class="col-md-8 col-md-offset-3">

                                                <form action="log-in.php" method="post">
                                                      <img class=" rt-3" style="position: relative; top: 20px; left: 110px;" src="img/msi.png" alt="MSI" width="130" height="130"><br /><br />

                                                      <h2 class="h3 mb-3 fw-normal" style="font-size: 18;">
                                                            Please log in
                                                      </h2>

                                                      <div class="form-floating" style="font-size: 12px;">
                                                            <input type="email" name="email" class="form-control" id="email">
                                                            <label for="floatingInput">Email address</label>
                                                      </div>

                                                      <div class="form-floating" style="font-size: 12px;">
                                                            <input type="password" name="password" class="form-control" id="password">
                                                            <label for="password">Password</label>
                                                      </div>

                                                      <p class="mb-3 fw-normal" style="font-size: 15px;">Don't have a account? <a href="hostel.php">Register</a></p>

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
            </div>
      </div>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>