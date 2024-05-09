<?php
session_start();
$server = "localhost";
$userename = "root";
$password = "";
$database = "hostel";
$mysqli = new mysqli($server, $userename, $password, $database);

date_default_timezone_set('Asia/Kolkata');
function check_login()
{
    if (strlen($_SESSION['id']) == 0) {
        $host = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = "index.php";
        $_SESSION["id"] = "";
        header("Location: http://$host$uri/$extra");
    }
}

$aid = $_SESSION['id'];
if (isset($_POST['update'])) {
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $contactno = $_POST['contactno'];

    $udate = date('d-m-Y h:i:s', time());

    $query = "update  userregistration set name=?,gender=?,contactNo=?,updationDate=? where id=?";
    $stmt = $mysqli->prepare($query);

    $rc = $stmt->bind_param('ssisi', $name, $gender, $contactno, $udate, $aid);
    $stmt->execute();

    echo "<script>alert('Profile updated Succssfully');</script>";
}

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <title>My Profile</title>

        <script src="../assets/js/color-modes.js"></script>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">


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
    </head>

<body style="font-family: 'Times New Roman', Times, serif; ">
    <?php include('includes/navbar-dashboard.php'); ?>
    <?php include('includes/logo.php'); ?>

    <!--For creating user login info  -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">My Profile</h1>
        </div>

        <!--My Profile Page-->

        <?php
        $aid = $_SESSION['id'];
        $udate = date('d-m-Y h:i:s', time());
        $ret = "select * from userregistration where id=?";
        $stmt = $mysqli->prepare($ret);
        $stmt->bind_param('i', $aid);
        $stmt->execute(); //ok
        $res = $stmt->get_result();
        //$cnt=1;
        while ($row = $res->fetch_object()) {
        ?><br>

            <form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
                <div class="form-group mb-3">
                    <label class="col-sm-2 mb-3 control-label"> Enrollment No : </label>
                    <div class="col-sm-8">
                        <input type="text" name="rollno" id="rollno" class="form-control" required="required" value="<?php echo $row->rollno; ?>" readonly="true">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $row->name; ?>" required="required">
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="col-sm-2 control-label">Gender : </label>
                    <div class="col-sm-8 mb-3">
                        <select name="gender" class="form-control" required="required">
                            <option value="<?php echo $row->gender; ?>"><?php echo $row->gender; ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>

                        </select>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email Id</label>
                    <div class="col-sm-8 mb-3">
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $row->email; ?>" readonly>
                    </div>
                </div>


                <div class="form-group mb-3">
                    <label class="col-sm-2 control-label">Contact No : </label>
                    <div class="col-sm-8 mb-3">
                        <input type="text" name="contactno" id="contactno" class="form-control" maxlength="10" value="<?php echo $row->contactNo; ?>" required="required">
                    </div>
                </div><br>


                <div class="col-12">
                    <center><button class="btn btn-primary" type="submit" name="update" style="width: 14%;">Update Profile</button></center><br /><br />
                </div>
            </form>
        <?php
        }
        ?>

        <?php include('includes/theme.php'); ?>
        <br />

    </main>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>