<?php
session_start();
$server = "localhost";
$userename = "root";
$password = "";
$database = "project";

$mysqli = new mysqli($server, $userename, $password, $database);

if (!$mysqli) {
    die("Connection failed due to" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <head>
    <title>Dashboard</title>

    <script src="../assets/js/color-modes.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
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

      .panel-default {
        border-color: #dfd7ca;
      }

      .panel {
        box-shadow: none;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        overflow: hidden;
      }

      .panel-body {
        padding: 15px;
      }

      .text-white,
      .text-light {
        color: #fff !important;
      }

      .bk-success {
        background: #782020;
      }

      .text-light {
        --bs-text-opacity: 1;
        color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important;
      }

      .h1 {
        font-size: 36px;
      }

      h1,
      .h1,
      h2,
      .h2,
      h3,
      .h3 {
        margin-top: 20px;
        margin-bottom: 10px;
      }

      .panel .panel-footer {
        font-size: 11px;
        line-height: 22px;
        font-weight: 500;
        text-transform: uppercase;
      }

      .panel-footer {
        padding: 10px 15px;
        background-color: #f8f5f0;
        border-color: transparent;
        border-top: 1px solid #dfd7ca;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
      }
    </style>
  </head>


<body style="font-family: 'Times New Roman', Times, serif;">

  <?php include('includes/logo.php'); ?>
  <?php include('includes/navbar-dashboard.php'); ?>


  <!--For creating user login info  -->
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-body bk-primary text-light">
                      <div class="stat-panel text-center">
                        <div class="stat-panel-number h1 ">My Profile</div>
                      </div>
                    </div>

                    <a href="my-profile.php" class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i></a>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-body bk-success text-light">
                      <div class="stat-panel text-center">

                        <div class="stat-panel-number h1 ">My Room</div>

                      </div>
                    </div>
                    <a href="room-details.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include('includes/theme.php'); ?>


</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>