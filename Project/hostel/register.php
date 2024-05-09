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

// echo "connected to db";

if (isset($_POST['regno'])) {
  $regno = $_POST['regno'];
  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $contactno = $_POST['mobile'];
  $emailid = $_POST['email'];
  $password = $_POST['password'];


  $result = "SELECT count(*) FROM userRegistration WHERE email=? || rollno=?";
  $stmt = $mysqli->prepare($result);
  $stmt->bind_param('ss', $email, $regno);
  $stmt->execute();

  $stmt->bind_result($count);
  $stmt->fetch();
  $stmt->close();

  if ($count > 0) {
    echo "<script>alert('Registration number or email id already registered.');</script>";
  } else {

    $query = "insert into userregistration (rollno, name, gender, contactNo, email, password) values(?,?,?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    //echo $stmt;
    $rc = $stmt->bind_param('ississ', $regno, $name, $gender, $contactno, $emailid, $password);
    $stmt->execute();
    echo "<script>alert('Student Successfully Register');</script>";
  }
}
?>
<?php include('hostel.php'); ?>