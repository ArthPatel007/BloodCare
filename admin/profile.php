<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	// Code for update profile
	if (isset($_POST['submit'])) {
		$adminid = $_SESSION['alogin'];
		$AName = $_POST['adminname'];
		$mobno = $_POST['mobilenumber'];
		$email = $_POST['email'];
		$sql = "UPDATE tbladmin SET AdminName='$AName', MobileNumber='$mobno', Email='$email' WHERE UserName='$adminid'";
		if ($conn->query($sql) === TRUE) {
			echo '<script>alert("Your profile has been updated")</script>';
			echo "<script>window.location.href ='profile.php'</script>";
		} else {
			echo "Error updating record: " . $conn->error;
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
		<meta name="theme-color" content="#3e454c">

		<title>BloodCare | Admin Change Password</title>

		<!-- Font awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Sandstone Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap Datatables -->
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
		<!-- Bootstrap social button library -->
		<link rel="stylesheet" href="css/bootstrap-social.css">
		<!-- Bootstrap select -->
		<link rel="stylesheet" href="css/bootstrap-select.css">
		<!-- Bootstrap file input -->
		<link rel="stylesheet" href="css/fileinput.min.css">
		<!-- Awesome Bootstrap checkbox -->
		<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
		<!-- Admin Stye -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="faviconblood.png" type="image/x-icon" />

		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>


	</head>

	<body>
		<?php include('includes/header.php'); ?>
		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<h2 class="page-title">Admin Profile</h2>
							<div class="row">
								<div class="col-md-10">
									<div class="panel panel-default">
										<div class="panel-heading">Form fields</div>
										<div class="panel-body">
											<form method="post" class="form-horizontal" onSubmit="return valid();">
												<?php
												$sql = "SELECT * FROM tbladmin";
												$result = $conn->query($sql);
												$cnt = 1;
												if ($result->num_rows > 0) {
													while ($row = $result->fetch_assoc()) { ?>
														<div class="hr-dashed"></div>
														<div class="form-group">
															<label class="col-sm-4 control-label">Admin Name</label>
															<div class="col-sm-8">
																<input type="text" name="adminname" value="<?php echo $row['AdminName']; ?>" class="form-control" required='true'>
															</div>
														</div>
														<div class="hr-dashed"></div>
														<div class="form-group">
															<label class="col-sm-4 control-label">User Name</label>
															<div class="col-sm-8">
																<input type="text" name="username" value="<?php echo $row['UserName']; ?>" class="form-control" readonly="">
															</div>
														</div>
														<div class="hr-dashed"></div>
														<div class="form-group">
															<label class="col-sm-4 control-label">Contact Number</label>
															<div class="col-sm-8">
																<input type="text" name="mobilenumber" value="<?php echo $row['MobileNumber']; ?>" class="form-control" maxlength='10' required='true' pattern="[0-9]+">
															</div>
														</div>
														<div class=" hr-dashed">
														</div>
														<div class="form-group">
															<label class="col-sm-4 control-label">Email</label>
															<div class="col-sm-8">
																<input type="email" name="email" value="<?php echo $row['Email']; ?>" class="form-control" required='true'>
															</div>
														</div>
														<div class="hr-dashed"></div>
											<?php $cnt = $cnt + 1;
													}
												}
											} ?>
											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Loading Scripts -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>
		<script src="js/Chart.min.js"></script>
		<script src="js/fileinput.js"></script>
		<script src="js/chartData.js"></script>
		<script src="js/main.js"></script>

	</body>

	</html>
	<?php  ?>