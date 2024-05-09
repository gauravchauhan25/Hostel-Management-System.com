<?php
session_start();

$server = "localhost";
$userename = "root";
$password = "";
$database = "project";

$mysqli = new mysqli($server, $userename, $password, $database);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $stmt = $mysqli->prepare("SELECT email,contactNo,password FROM userregistration WHERE (email=? && contactNo=?) ");

    $stmt->bind_param('ss', $email, $contact);
    $stmt->execute();

    $stmt->bind_result($username, $email, $password);
    $rs = $stmt->fetch();

    if ($rs) {
        $pwd = $password;
    } else {
        echo "<script>alert('Invalid Email/Contact no or password');</script>";
    }
}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <style>
        .button-btn{
            background-color: #1e6cbb; font-size: 15px; font-family:'Times New Roman', Times, serif;
        }
    </style>
</head>

<body style="font-family: 'Times New Roman', Times, serif;" >
    <div class="login-page bk-img" style="background-image: url(login-bg.jpg);">
        <div class="form-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="text-center text-bold text-light mt-4x">Forgot Password</h1>
                        <div class="well row pt-2x pb-3x ">
                            <div class="col-md-8 col-md-offset-2">

                                <?php if (isset($_POST['login'])) { ?>
                                    <p style="color: green; text-align: center; font-size: 18px;">Your Password is <?php echo $pwd; ?></p>
                                <?php }  ?>

                                <form action="" class="mt" method="post">
                                    <label for="" class="text-uppercase text-sm">Email</label>
                                    <input type="email" placeholder="Email" name="email" class="form-control mb">
                                    <label for="" class="text-uppercase text-sm">Contact no</label>
                                    <input type="text" placeholder="Contact no" name="contact" class="form-control mb">

                                    <button type="submit" name="login" class="btn btn-primary py-2 btn-block w-100 button-btn" value="Login" style="font-size: 18px; color: white;">Get Password</button>
                                </form>
                            </div>
                        </div>
                        <div class="text-center" style="font-size: 18px; color: white;">
                            <a href="index.php" class="text-light">Log in?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>