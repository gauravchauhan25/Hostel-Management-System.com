<?php
session_start();

$server = "localhost";
$userename = "root";
$password = "";
$database = "hostel";

$mysqli = new mysqli($server, $userename, $password, $database);

if (!$mysqli) {
    die("Connection failed due to" . mysqli_connect_error());
}
// echo "connected to db";
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Room Details</title>

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
            <h1 class="h2">Room Details</h1>
        </div>

        <div class="content-wrapper" style="font-size: 16px; font-family: georgia">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <table id="zctb" class="table table-bordered " cellspacing="0" width="100%" border="3">
                                    <tbody>
                                        <?php
                                        $aid = $_SESSION['login'];
                                        $ret = "select * from registration where (emailid=? || id=?)";
                                        $stmt = $mysqli->prepare($ret);
                                        $stmt->bind_param('ss', $aid, $aid);
                                        $stmt->execute();
                                        $res = $stmt->get_result();
                                        $cnt = 1;

                                        while ($row = $res->fetch_object()) {
                                        ?>
                                            <tr>
                                                <td colspan="6" style="text-align:center;">
                                                    <h3>Room Related Info</h3>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th>Registration Number :</th>
                                                <td><?php echo $row->regno; ?></td>
                                                <th>Apply Date :</th>
                                                <td colspan="3"><?php echo $row->postingDate; ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Room no :</b></td>
                                                <td><?php echo $row->roomno; ?></td>
                                                <td><b>Seater :</b></td>
                                                <td><?php echo $row->seater; ?></td>
                                                <td><b>Fees PM :</b></td>
                                                <td><?php echo $fpm = $row->feespm; ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Food Status:</b></td>
                                                <td>
                                                    <?php if ($row->foodstatus == 0) {
                                                        echo "Without Food";
                                                    } else {
                                                        echo "With Food";
                                                    }; ?></td>
                                                <td><b>Stay From :</b></td>
                                                <td><?php echo $row->stayfrom; ?></td>
                                                <td><b>Duration:</b></td>
                                                <td><?php echo $dr = $row->duration; ?> Months</td>
                                            </tr>

                                            <tr>
                                                <th>Hostel Fee:</th>
                                                <td><?php echo $hf = $dr * $fpm ?></td>
                                                <th>Food Fee:</th>
                                                <td colspan="3">
                                                    <?php
                                                    if ($row->foodstatus == 1) {
                                                        echo $ff = (2000 * $dr);
                                                    } else {
                                                        echo $ff = 0;
                                                        echo "<span style='padding-left:2%; color:red;'>(You booked hostel without food).<span>";
                                                    } ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Total Fee :</th>
                                                <th colspan="5"><?php echo $hf + $ff; ?></th>
                                            </tr>

                                            <tr>
                                                <td colspan="6" style="text-align:center;">
                                                    <h3>Personal  Info</h3>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td><b>Reg No. :</b></td>
                                                <td><?php echo $row->regno; ?></td>
                                                <td><b>Name :</b></td>
                                                <td><?php echo $row->name; ?></td>
                                                <td><b>Email :</b></td>
                                                <td><?php echo $row->emailid; ?></td>
                                            </tr>


                                            <tr>
                                                <td><b>Contact No. :</b></td>
                                                <td><?php echo $row->contactno; ?></td>
                                                <td><b>Gender :</b></td>
                                                <td><?php echo $row->gender; ?></td>
                                                <td><b>Course :</b></td>
                                                <td><?php echo $row->course; ?></td>
                                            </tr>


                                            <tr>

                                                <td><b>Guardian Name :</b></td>
                                                <td><?php echo $row->guardianName; ?></td>
                                                <td><b>Guardian Relation :</b></td>
                                                <td><?php echo $row->guardianRelation; ?></td>
                                            </tr>

                                            <tr>
                                                <td><b>Guardian Contact No. :</b></td>
                                                <td colspan="6"><?php echo $row->guardianContactno; ?></td>
                                            </tr>

                                            <tr>
                                                <td colspan="6" style="text-align:center;">
                                                    <h3>Address</h3>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td><b>Correspondense Address</b></td>
                                                <td colspan="2">
                                                    <?php echo $row->corresAddress; ?><br />
                                                    <?php echo $row->corresCIty; ?>,
                                                    <?php echo $row->corresPincode; ?><br />
                                                    <?php echo $row->corresState; ?>
                                                </td>
                                            </tr>

                                        <?php
                                            $cnt = $cnt + 1;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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