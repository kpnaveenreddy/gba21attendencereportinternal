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
<title>GBA2021 ARI</title>
</head>
<body>
<style>
	.apptitude {
		width:100%;
		height:100%;
		border:2px solid #C0C0C0;
		border-collapse:collapse;
		padding:5px;
	}
	.apptitude caption {
		caption-side:top;
		text-align:center;
	}
	.apptitude th {
		border:2px solid #C0C0C0;
		padding:5px;
	}
	.apptitude td {
		border:2px solid #C0C0C0;
		text-align:center;
		padding:5px;
	}
</style>
<table class="apptitude">
	<caption>Apptitude Assisment Report</caption>
	<thead>
	<tr>
		<th>Course Name</th>
		<th>Regualar Percentile</th>
		<th>Betterment Percentile</th>
		<th>Final Score</th>
		<th>Rank</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Assisment Test:1</td>
		<td><?php echo $row["AT-1"];?></td>
		<td><?php echo $row["AT-1Betterment"];?></td>
		<td><?php echo $row["AT-1FinalScore"];?></td>
		<td><?php echo $row["AT01-Rank"];?></td>
	</tr>
	<tr>
		<td>Assisment Test:2</td>
		<td><?php echo $row["AT-2"];?></td>
		<td><?php echo $row["AT2-Betterment"];?></td>
		<td><?php echo $row["AT-2- FinalScore"];?></td>
		<td><?php echo $row["AT02-Rank"];?></td>
	</tr>
	<tr>
		<td>Assisment Test:3</td>
		<td><?php echo $row["AT-3"];?></td>
		<td><?php echo $row["AT-3Betterment"];?></td>
		<td><?php echo $row["AT-3FinalScore"];?></td>
		<td><?php echo $row["AT-3Rank"];?></td>
	</tr>
	<tr>
		<td>Assisment Test:4</td>
		<td><?php echo $row["AT-4"];?></td>
		<td><?php echo $row["AT-4Betterment"];?></td>
		<td><?php echo $row["AT-4Final Score"];?></td>
		<td><?php echo $row["AT-4Rank"];?></td>
	</tr>
	<tr>
		<td>Assisment Test:5</td>
		<td><?php echo $row["AT-5"];?></td>
		<td><?php echo $row["AT-5Betterment"];?></td>
		<td><?php echo $row["AT-5FinalScore"];?></td>
		<td><?php echo $row["AT5Rank"];?></td>
	</tr>
	<tr>
		<td>Assisment Test:6</td>
		<td><?php echo $row["AT-6"];?></td>
		<td><?php echo $row["AT-6Betterment"];?></td>
		<td><?php echo $row["AT-6 FinalScore"];?></td>
		<td><?php echo $row["AT-6Rank"];?></td>
	</tr>
	<tr>
	<td colspan="3" >CRT Average Percentile </td>
	<td colspan="2" ><?php echo $row["CRTAverage"];?>  </td>
	</tr>
	<tr>
	<td colspan="3" >CRT Average Rank </td>
	<td colspan="2" ><?php echo $row["CRTAverageRank"];?> </td>
	</tr>
	<tbody>
</table>
</body>
</html>
