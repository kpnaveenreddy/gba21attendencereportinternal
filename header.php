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
<body>
	<style>
		.header {
			width:100%;
			height:100%;
			border:2px solid #C0C0C0;
			border-collapse:collapse;
			padding:5px;
		}
		.header caption {
			caption-side:top;
			text-align:center;
		}
		.header th {
			border:2px solid #C0C0C0;
			text-align:left;
			padding:5px;
		}
		.header td {
			border:2px solid #C0C0C0;
			text-align:left;
			padding:5px;
		}
	</style>
<title>GBA2021 ARI</title>
</head>

<table class="header">

	<thead>
	<tr>
		<th>Full Name:  <?php echo $row["StudentName"];?> </th>
		<th>Roll Number: <?php echo $row["RollNumber"];?> </th>
		<th>Branch:  <?php echo $row["Branch"];?> </th>
		<th>CRT Category:  <?php echo $row["CRTCategory"];?></th>
		<th>CRT Batch:  <?php echo $row["CRTBatch"];?></th>
	</tr>
	</thead>

</table>
</body>
</html>
