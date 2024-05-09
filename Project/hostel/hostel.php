<!-- Takes input values for registration and store them in the database -->
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <head>
    <title>User Registration</title>

    <script src="../assets/js/color-modes.js"></script>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">

    <style>
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

      body {
        font-family: 'Times New Roman', Times, serif;
      }

      .logo {
        position: absolute;
        top: 20px;
        left: 1400px;
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
  </head>


<body>

  <!-- Creation of navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary rounded sticky-top bg-dark flex-md-nowrap shadow" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
      <div class="collapse navbar-collapse d-lg-flex">
        <h1 class="col-lg-3 me-0" style="font-size: 25px;">&nbsp;Maharaja Surajmal Institute</h1>
        <ul class="navbar-nav col-lg-6 justify-content-lg-center" style="font-size: 19px;">
          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="www.msijanakpuri.com">
              <svg class="bi">
                <use xlink:href="#house-fill" />
              </svg> Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php include('includes/logo.php'); ?>

  <div class="container-fluid" style="font-size: 17px;">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
          </div>

          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="index.php" style="font-size: 20px;">
                  <svg class="bi">
                    <use xlink:href="#house-fill" />
                  </svg>
                  User Login
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="hostel.php" style="font-size: 20px;">
                  <svg class="bi">
                    <use xlink:href="#people" />
                  </svg>
                  User Registration
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>


      <!--For creating user login info  -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">User Registration</h1>
        </div>


        <!--Main Log in Page-->
        <h5>Please fill out the following details for Registration / Sign Up</h5><br />
        <form method="post" action="register.php">
          <div class="mb-3">
            <label for="regno" class="form-label">Enrollment No.</label>
            <input type="number" name="regno" class="form-control" id="regno" required>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email Id</label>
            <input type="text" name="email" class="form-control" id="email" required>
          </div>

          <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>

          <legend>Gender</legend>
          <div class="form-check">
            <input type="radio" name="gender" value="male" class="form-check-input" id="male">
            <label class="form-check-label" for="female">Male</label>
          </div>
          <div class="mb-3 form-check">
            <input type="radio" name="gender" value="female" class="form-check-input" id="female">
            <label class="form-check-label" for="female">Female</label>
          </div>


          <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <select class="form-select form-select-sm" name="course" style="padding: 10px;">
              <option selected="selected">Select the course</option>
              <option>BCA</option>
              <option>BBA</option>
              <option>B.Ed</option>
              <option>BA.LLB</option>
              <option>MCA</option>
              <option>MBA</option>
              <option>M.Ed</option>
            </select>
          </div>

          <div class="input-group">
            <span class="input-group-text">Permanent Address</span>
            <textarea class="form-control" name="address" aria-label="With textarea" id="address"></textarea required>
          </div><br/>
          

         <div class="mb-3">
            <label for="mobile" class="form-label">Mobile Number</label>
            <input type="number" name="mobile" class="form-control" id="mobile">
        </div>

        <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
          </div>
        </div>

        <div class="col-12">
          <button class="btn btn-primary" type="reset" style="width: 14%;">Reset form</button>
          <button class="btn btn-primary" type="submit" style="width: 14%;">Submit form</button><br/><br/>
        </div>
      </form>
     

      <?php include('includes/theme.php'); ?>
      <br/>

</main>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>