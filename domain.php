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
	.domain {
		width:100%;
		height:100%;
		border:2px solid #C0C0C0;
		border-collapse:collapse;
		padding:5px;
	}
	.domain caption {
		caption-side:top;
		text-align:center;
	}
	.domain th {
		border:2px solid #C0C0C0;
		padding:5px;
	}
	.domain td {
		border:2px solid #C0C0C0;
		text-align:center;
		padding:5px;
	}
</style>
<table class="domain">
	<caption>Domain Assisment Report</caption>
	<thead>
	<tr>
		<th>Course Name</th>
		<th>Percentile</th>
		<th>Rank</th>
	</tr>
	</thead>
	<tbody>

	<tr>
		<td>Domain Test:1</td>
		<td><?php echo $row["DT-1"];?>  </td>
		<td> <?php echo $row["DT-1Rank"] ?></td>

	</tr>
	<tr>
		<td>Domain Test:2</td>
		<td><?php echo $row["DT-2"];?>  </td>
		<td> <?php echo $row["DT-2Rank"] ?></td>

	</tr>
	<tr>
		<td>Domain Test:3</td>
		<td><?php echo $row["DT-3"];?>  </td>
		<td> <?php echo $row["DT-3Rank"] ?></td>

	</tr>
	<tr>
		<td>Domain Test:4</td>
		<td><?php echo $row["DT4"];?>  </td>
		<td> <?php echo $row["Dt-4Rank"] ?></td>

	</tr>
		<tr>
	<td colspan="2" >Domain Average Percentile </td>
	<td colspan="1" ><?php echo $row["DTAverageScore"] ?>  </td>
	</tr>
	<tr>
	<td colspan="2" >Domain Average Rank </td>
	<td colspan="1" > <?php echo $row["DTAverageRank"] ?></td>
	</tr>
	<tbody>

</table>
<p style="text-align:right;">  Grant Total Percentile : <?php echo $row["GT-1Percentage"] ?> <p>
<p style ="text-align:right;"> Grant Total Rank       : <?php echo $row["GT-1Rank"] ?> <p>

<button onclick="window.print()" style="background-color:white;margin:auto;display:block">Print this Page</button>
</body>
</html>
