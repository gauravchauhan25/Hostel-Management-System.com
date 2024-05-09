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

// //code for registration
// if (isset($_POST['submit'])) {
// 	$roomno = $_POST['room'];
// 	// $seater = $_POST['seater'];
// 	// $feespm = $_POST['fpm'];
// 	$foodstatus = $_POST['foodstatus'];
// 	$stayfrom = $_POST['stayf'];
// 	$duration = $_POST['duration'];


// 	$regno = $_POST['rollno'];
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$password = $_POST['password'];
// 	$gender = $_POST['gender'];
// 	$course = $_POST['course'];
// 	$address = $_POST['address'];
// 	$mobile = $_POST['mobile'];


// 	$gurname = $_POST['gname'];
// 	$gurcntno = $_POST['gcontact'];
// 	$address = $_POST['address'];
// 	$city = $_POST['city'];
// 	$state = $_POST['state'];
// 	$pincode = $_POST['pincode'];


// 	$query = "insert into  registration(roomno,foodstatus,stayfrom,duration,course,regno,firstName,gender,contactno,emailid,guardianName,guardianContactno,corresAddress,corresCIty,corresState,corresPincode) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
// 	echo "$query";
// 	$stmt = $mysqli->prepare($query);
// 	$rc = $stmt->bind_param('iisisissississsi', $roomno,  $foodstatus, $stayfrom, $duration, $course, $regno, $name, $gender, $contactno, $emailid, $gurname, $gurcntno, $address, $city, $state, $pincode);
// 	$stmt->execute();
// 	echo "<script>alert('Student Succssfully register');</script>";


// 	// $sql = "INSERT INTO `register` (`Enrollment_No.`, `Name`, `Email`, `Password`, `Gender`, `Course`, `Address`, `Mobile`) 
//     //   VALUES ('$rollno', '$name', '$email', '$password', '$gender', '$course', '$address', '$mobile');";
// 	// //  echo $sql;
// }
?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Book Hostel</title>

	<script src="../assets/js/color-modes.js"></script>
	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
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

		.ts-main-content .content-wrapper {
			padding-top: 15px;
			margin-top: 20px;
		}

		@media only screen and (min-width: 992px) {
			.ts-main-content .ts-sidebar {
				width: 250px;
				float: left;
			}

			.ts-main-content .content-wrapper {
				margin-left: 250px;
			}
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

	<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Book Hostel</h1>
		</div>

		<!--Main booking hostel Page-->
		<div class="container-fluid" style="font-size: 17px;">
			<form method="post" action="booking_hostel.php">
				<?php
				$uid = $_SESSION['login'];
				$stmt = $mysqli->prepare("SELECT emailid FROM registration WHERE emailid=? || regno=? ");
				$stmt->bind_param('ss', $uid, $uid);
				$stmt->execute();
				$stmt->bind_result($email);
				$rs = $stmt->fetch();
				$stmt->close();
				if ($rs) { ?>
					<h3 style="color: red" align="center">Hostel already booked by you</h3>
					<div align="center">
						<div class="col-md-4">&nbsp;</div>
						<div class="col-md-4">
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
				<?php } else {
				?>

					<div class="form-group">
						<br />
						<h4 align="left">Room Related info </h4>
					</div><br />

					<div class="container-fluid">
						<div class="form-group mb-3">
							<label class="col-sm-2 control-label form-label"> Room no.</label>
							<div class="col-sm-8" mb-3>
								<select name="room" id="room" class="form-control form-select-sm form-select mb-3" onChange="getSeater(this.value);" style="font-size: 15px; padding: 7px;" required>
									<option value="">Select Room</option>
									<?php $query = "SELECT * FROM rooms";
									$stmt2 = $mysqli->prepare($query);
									$stmt2->execute();
									$res = $stmt2->get_result();
									while ($row = $res->fetch_object()) {
									?>
										<option value="<?php echo $row->room_no; ?>"> <?php echo $row->room_no; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<!-- <div class="form-group mb-3">
									<label class="form-label">Seater</label>
									<div class="col-sm-8">
										<input type="text" name="seater" id="seater" class="form-control" value="" readonly="true">
									</div>
								</div>



								<div class="form-group mb-3">
									<label class="form-label">Fees Per Month</label>
									<div class="col-sm-8">
										<input type="text" name="fpm" class="form-control" readonly="true">
									</div>
								</div> -->


						<legend>Food Status</legend>
						<div class="form-check mb-3">
							<div class="col-sm-8">
								<input type="radio" value="0" name="foodstatus" checked="checked"> Without Food&nbsp;&nbsp;
								<input type="radio" value="1" name="foodstatus"> With Food (Rs 2000.00 Per Month Extra)
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="form-label">Stay From</label>
							<div class="col-sm-8">
								<input type="date" name="stayfrom" id="stayfrom" class="form-control">
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="form-label">Duration</label>
							<div class="col-sm-8">
								<select name="duration" id="duration" class="form-control form-select" style="font-size: 15px; padding: 7px;">
									<option value="">Select Duration in Month</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
							</div>
						</div>
					</div><br>
					<hr>


					<div class="form-group">
						<br />
						<h4 align="left">Personal info </h4>
					</div><br />

					<?php
					$aid = $_SESSION['id'];
					$ret = "select * from userregistration where id=?";
					$stmt = $mysqli->prepare($ret);
					$stmt->bind_param('i', $aid);
					$stmt->execute(); //ok
					$res = $stmt->get_result();
					//$cnt=1;
					while ($row = $res->fetch_object()) {
					?>

						<div class="container-fluid form-group">
							<div class="mb-3">
								<label for="regno" class="form-label control-label col-sm-2">Enrollment No.</label>
								<div class="col-sm-8">
									<input type="text" name="regno" class="form-control" id="regno" value="<?php echo $row->regNo; ?>" readonly>
								</div>
							</div>

							<div class="mb-3">
								<label for="name" class="form-label">Name</label>
								<div class="col-sm-8">
									<input type="text" name="name" class="form-control" id="name" required>
								</div>
							</div>



							<div class="form-group mb-3">
								<label for="email" class="col-sm-2 control-label form-label">Email Id</label>
								<div class="col-sm-8">
									<input type="text" name="email" class="form-control" style="font-size: 15px;" id="email" value="<?php echo $row->email; ?>" readonly>
								</div>
							</div>


							<div class="form-group mb-3">
								<label for="contact" class="col-sm-2 control-label form-label">Contact Number</label>
								<div class="col-sm-8">
									<input type="text" name="contact" class="form-control" style="font-size: 15px;" id="contact" value="<?php echo $row->contactNo; ?>" class="form-control" readonly>
								</div>
							</div>
						<?php } ?>

						<legend>Gender</legend>
						<div class="form-check mb-3">
							<input type="radio" name="gender" value="Male" class="form-check-input" id="male">
							<label class="form-check-label" for="female">Male</label>
						</div>

						<div class="mb-3 form-check">
							<input type="radio" name="gender" value="Female" class="form-check-input" id="female">
							<label class="form-check-label" for="female">Female</label>
						</div>


						<div class="mb-3">
							<label for="course" class="form-label">Course</label>
							<div class="col-sm-8">
								<select name="course" id="course" class="form-control form-select" style="font-size: 15px;" required>
									<option value="">Select Course</option>
									<?php $query = "SELECT * FROM courses";
									$stmt2 = $mysqli->prepare($query);
									$stmt2->execute();
									$res = $stmt2->get_result();
									while ($row = $res->fetch_object()) {
									?>
										<option value="<?php echo $row->course_fn; ?>"><?php echo $row->course_fn; ?>&nbsp;&nbsp;(<?php echo $row->course_sn; ?>)</option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="mb-3">
							<label for="gname" class="form-label">Guardian's Name</label>
							<div class="col-sm-8">
								<input type="text" name="gurname" class="form-control" id="gname" required>
							</div>
						</div>

						<div class="mb-3">
							<label for="grelation" class="form-label">Guardian's Relation</label>
							<div class="col-sm-8">
								<input type="text" name="grelation" class="form-control" id="grelation" required>
							</div>
						</div>

						<div class="mb-3">
							<label for="phone" class="form-label">Guardian's Contact Number</label>
							<div class="col-sm-8">
								<input type="number" name="gurcontact" class="form-control" id="gcontact">
							</div>
						</div><br>
						<hr>
						</div>


						<div class="form-group">
							<br />
							<h4 align="left">Correspondense Address </h4>
						</div><br />

						<div class="container-fluid">
							<div class="form-group">
								<label class="col-sm-4 control-label" mb-3>
									<h4 align="left">Correspondense Address</h4>
								</label>
							</div>

							<div class="input-group" mb-3>
								<span class="input-group-text">Address</span>
								<div class="col-sm-8">
									<textarea class="form-control" name="address" aria-label="With textarea" id="address" required></textarea>
								</div>
							</div><br />

							<div class="mb-3">
								<label for="city" class="form-label">City</label>
								<div class="col-sm-8">
									<input type="text" name="city" class="form-control" id="city" required>
								</div>
							</div>

							<div class="mb-3">
								<label for="state" class="form-label">State</label>
								<div class="col-sm-8">
									<select name="state" id="state" class="form-control form-select form-select-sm" style="font-size: 15px; padding: 7px;" required>
										<option value="">Select State</option>
										<?php $query = "SELECT * FROM states";
										$stmt2 = $mysqli->prepare($query);
										$stmt2->execute();
										$res = $stmt2->get_result();
										while ($row = $res->fetch_object()) {
										?>
											<option value="<?php echo $row->State; ?>"><?php echo $row->State; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="mb-3">
								<label for="pincode" class="form-label">Pincode</label>
								<div class="col-sm-8">
									<input type="number" name="pincode" class="form-control" id="pincode" required>
								</div>
							</div><br>


							<div class="mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
									<label class="form-check-label" for="invalidCheck3">
										Agree to terms and conditions
									</label>
								</div>
							</div>

							<div class="col-12">
								<button class="btn btn-primary" type="reset" style="width: 14%;">Cancel</button>
								<button class="btn btn-primary" name="submit" type="submit" style="width: 14%;">Register</button><br /><br />
							</div>
						</div>

			</form>
		<?php } ?>
		</div>

		<?php include('includes/theme.php'); ?>
	</main>
	</div>
	</div>

	

</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</html>