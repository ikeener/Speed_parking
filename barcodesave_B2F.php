<?php
	$conn=mysqli_connect('localhost', 'root','1234', 'finalproject');
	$barcodenote=$_POST["barcodenote"];//주차할 자리를 입력받아야됨
	$goDB="UPDATE barcodenote SET barcodenum='$barcodenote'";
	mysqli_query($conn, $goDB);
	echo("<script>location.replace('B2F.php');</script>");
?>