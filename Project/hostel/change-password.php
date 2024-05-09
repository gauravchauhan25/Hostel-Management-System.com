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

$ai = $_SESSION['id'];

// code for change password
if (isset($_POST['changepwd'])) {
    $op = $_POST['oldpassword'];
    $np = $_POST['newpassword'];

    $udate = date('d-m-Y h:i:s', time());;

    $sql = "SELECT password FROM userregistration where password=?";
    $chngpwd = $mysqli->prepare($sql);
    $chngpwd->bind_param('s', $op);
    $chngpwd->execute();
    $chngpwd->store_result();

    $row_cnt = $chngpwd->num_rows;;
    if ($row_cnt > 0) {
        $con = "update userregistration set password=?,passUdateDate=?  where id=?";
        $chngpwd1 = $mysqli->prepare($con);
        $chngpwd1->bind_param('ssi', $np, $udate, $ai);
        $chngpwd1->execute();
        $_SESSION['msg'] = "Password Changed Successfully !!";
    } else {
        $_SESSION['msg'] = "Old Password not match !!";
    }
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Change Password</title>

    <script src="../assets/js/color-modes.js"></script>
    <script type="text/javascript">
        function valid() {
            if (document.changepwd.newpassword.value != document.changepwd.cpassword.value) {
                alert("Password and Re-Type Password Field do not match  !!");
                document.changepwd.cpassword.focus();
                return false;
            }
            return true;
        }
    </script>


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">


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

        .panel-body {
            padding: 15px;
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
    </style>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">

    <?php include('includes/logo.php'); ?>
    <?php include('includes/navbar-dashboard.php'); ?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Change Password</h1>
        </div>

        <div class="col-md-10">
            <div class=" panel-default">
                <div class="panel-heading">
                    <div class="panel-body" style="position: relative; top: 30px; left: 200px; font-size: 17px;">
                        <form method="post" class="form-check form" name="changepwd" id="change-pwd" onSubmit="return valid();">

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Current Password </label>
                                <div class="col-sm-8 mb-3">
                                    <input type="password" name="oldpassword" id="oldpassword" class="form-control" onBlur="checkpass()" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">New Password</label>
                                <div class="col-sm-8 mb-3">
                                    <input type="password" class="form-control" name="newpassword" id="newpassword" value="" required="required">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label">Confirm Password</label>
                                <div class="col-sm-8 mb-3">
                                    <input type="password" class="form-control" value="" required="required" id="cpassword" name="cpassword">
                                </div>
                            </div>

                            <div class="col-sm-6 col-sm-offset-4 mb-3">
                                <input type="reset" name="reset" Value="Cancel" class="btn btn-primary" style="width: 40%; padding: 8px;">
                                <input type="submit" name="changepwd" Value="Change Password" class="btn btn-primary" style="width: 40%; padding: 8px;">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <?php include('includes/theme.php'); ?>

    
    </main>
    </div>
    </div>

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>