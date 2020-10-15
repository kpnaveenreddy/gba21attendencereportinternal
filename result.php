<?php
$RollNumber = $_POST["RollNumber"];
//$CRTCategory = $_POST["CRTCategory"];

// Create connection
$con = new mysqli("localhost", "root", "", "gba21ari");
$sql = mysqli_query($con, "SELECT * FROM gba21ari WHERE RollNumber =' $RollNumber'");// Check connection

$row=mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	body
	{
		background-image : url('images/logo.png');
		height: 100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		box-sizing: border-box;
  -moz-box-sizing: border-box;

	}

	@page {
		size : A4;
		height: 100%;
		margin: 0;
		background-size: cover;
		border: 1;
	}
	@media print {
		.page {
			margin: 0;
			height: auto;
			background-size: contain;
			border:instial;
		}

	}
	</style>
</head>
<body>

<section class="caption">
				<h1 class="Caption" style="text-align: center">GITAM </h1>
				<h2 class="caption" style="text-align: center">Internal Assisment Results : 2017-21 Batch</h2>
</section>
  <!-- Adding Header File of the Web Page-->
<?php include 'header.php'; ?>
  <!-- Adding Apptitude Training Report File-->
<?php include 'at.php'; ?>
  <!-- Adding Technical Training Report File-->
<?php include 'tt.php'; ?>
  <!-- Adding Domain tests reports file-->
<?php include 'domain.php' ?>


</body>
</html>
