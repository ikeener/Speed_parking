<?php
	$conn=mysqli_connect('localhost', 'root','1234', 'finalproject');
	$select_query="SELECT lot,lot_status,p_time,distance FROM parking_lots where lot like 'B2F%' ";
	$result1=mysqli_query($conn,$select_query);
	$row=mysqli_fetch_row($result1);
	$loc=$row[1];
	$num=0;
	$parking=0;
	if($loc=="idle"){
		$status=$row[1];
		$num=$num+1;
		$parking=$parking+1;
	}
	while($row=mysqli_fetch_row($result1)){
		$loc=$row[1];
		if($loc=="idle"){
			$num=$num+1;
		}
		$parking=$parking+1;
	}
	mysqli_close($conn);
?>

<?php
	$conn=mysqli_connect('localhost', 'root','1234', 'finalproject');
	$select_query="SELECT lot,lot_status,p_time,distance FROM parking_lots where lot like '8F%' ";
	$result1=mysqli_query($conn,$select_query);
	$row=mysqli_fetch_row($result1);
	$loc=$row[1];
	$num8=0;
	$parking8=0;
	if($loc=="idle"){
		$status=$row[1];
		$num8=$num8+1;
		$parking8=$parking8+1;
	}
	while($row=mysqli_fetch_row($result1)){
		$loc=$row[1];
		if($loc=="idle"){
			$num8=$num8+1;
		}
		$parking8=$parking8+1;
	}
	mysqli_close($conn);
?>

<html>
<head>
<title>Speed Parking</title>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="5">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="homestyle.css?ver1" type="text/css">
<style>

</style>
</head>
<body>


<h1>Speed Parking</h1>
<center>

	<table>
	<tr>
	<td></td><td></td><td></td><td></td><td></td>
		<th style="border-bottom:2px solid black;">floor</th>
		<td style="border-bottom:2px solid black;"></td>
		<th class="lot" style="border-bottom:2px solid black;">space / total</th>
	</tr>
	<tr class="change" onclick="location.href='B2F.php';" >
	<td></td><td></td><td></td><td></td><td></td>
	    <td>B2F</td>
		<td></td>
	    <td class="lot"><?php echo $num?> / <?php echo $parking?></td>
	</tr>
	<tr class="change">
	<td></td><td></td><td></td><td></td><td></td>
	    <td>B3F</td>
		<td></td>
	    <td class="lot">185 / 230</td>
	</tr>
	<tr class="change">
	<td></td><td></td><td></td><td></td><td></td>
	    <td>B4F</td>
		<td></td>
	    <td class="lot">87 / 310</td>
	</tr>
	<tr class="change">
	<td></td><td></td><td></td><td></td><td></td>
	    <td>5F</td>
		<td></td>
	    <td class="lot">3 / 70</td>
	</tr>
	<tr class="change"><td></td><td></td><td></td><td></td><td></td>
	    <td>6F</td>
		<td></td>
	    <td class="lot">6 / 70</td>
	</tr>
	<tr class="change"><td></td><td></td><td></td><td></td><td></td>
	    <td>7F</td>
		<td></td>
	    <td class="lot">15 / 70</td>
	</tr>
	<tr class="change" onclick="location.href='8F.php';"><td></td><td></td><td></td><td></td><td></td>
	    <td>8F</td>
		<td></td>
	    <td class="lot"><?php echo $num8?> / <?php echo $parking8?></td>
	</tr>
    </table>

</center>
</body>
</html>