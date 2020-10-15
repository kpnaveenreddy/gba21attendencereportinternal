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
	.technical {
		width:100%;
		height:100%;
		border:2px solid #C0C0C0;
		border-collapse:collapse;
		padding:5px;
	}
	.technical caption {
		caption-side:top;
		text-align:center;
	}
	.technical th {
		border:2px solid #C0C0C0;
		padding:5px;
	}
	.technical td {
		border:2px solid #C0C0C0;
		text-align:center;
		padding:5px;
	}
</style>
<table class="technical">
	<caption>Technical Assisment Report</caption>
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
		<td>Technical Test:1</td>
		<td><?php echo $row["TT-1"];?></td>
		<td><?php echo $row["TT-1Betterment"];?></td>
		<td><?php echo $row["TT-1Final Score"];?></td>
		<td><?php echo $row["TT-1Rank"];?></td>
	</tr>
	<tr>
		<td>Technical Test:2</td>
		<td><?php echo $row["TT-2"];?></td>
		<td><?php echo $row["TT-2Betterment"];?></td>
		<td><?php echo $row["TT-2FinalScore"];?></td>
		<td><?php echo $row["TT-2Rank"];?></td>
	</tr>

	<tr>
		<td>Technical Test:3</td>
		<td><?php echo $row["TT-3"];?></td>
		<td><?php echo $row["TT-3Betterment"];?></td>
		<td><?php echo $row["TT-3FinalScore"];?></td>
		<td><?php echo $row["TT-3Rank"];?></td>
	</tr>
	<tr>
		<td>Technical Test:4</td>
		<td><?php echo $row["TT-4"];?></td>
		<td><?php echo $row["TT-4Betterment"];?></td>
		<td><?php echo $row["TT-4FinalScore"];?></td>
		<td><?php echo $row["TT-4Rank"];?></td>
	</tr>
	<tr>
		<td>Technical Test:5</td>
		<td><?php echo $row["TT-5"];?></td>
		<td><?php echo $row["TT-5Betterment"];?></td>
		<td><?php echo $row["TT-5 FinalScore"];?></td>
		<td><?php echo $row["TT-5Rank"];?></td>
	</tr>
	<tr>
		<td>Technical Test:6</td>
		<td><?php echo $row["TT-6"];?></td>
		<td><?php echo $row["TT-6Betterment"];?></td>
		<td><?php echo $row["TT-6FinalScore"];?></td>
		<td><?php echo $row["TT-6Rank"];?></td>
	</tr>
	<tr>
		<td>Technical Test:7</td>
		<td><?php echo $row["TT-7"];?></td>
		<td><?php echo $row["TT-7Betterment"];?></td>
		<td><?php echo $row["TT-7FinalScore"];?></td>
		<td><?php echo $row["TT-7Rank"];?></td>
	</tr>
	<tr>
		<td>Technical Test:8</td>
		<td><?php echo $row["TT-8"];?></td>
		<td><?php echo $row["TT-8Betterment"];?></td>
		<td><?php echo $row["TT-8 FinalScore"];?></td>
		<td><?php echo $row["TT-8Rank"];?></td>
	</tr>
	<tr>
	<td colspan="3" >Technical Average Percentile </td>
	<td colspan="2" > <?php echo $row["TTAverageScore"];?> </td>
	</tr>
	<tr>
	<td colspan="3" >Technical Average Rank </td>
	<td colspan="2" > <?php echo $row["TTAverageRank"];?>  </td>
	</tr>
	<tbody>
</table>
</body>
</html>
