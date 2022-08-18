<?php
	$conn=mysqli_connect('localhost', 'root','1234', 'finalproject');
	$select_query="SELECT lot,lot_status,p_time,distance FROM parking_lots where lot like 'B2F%' ";
	$result1=mysqli_query($conn,$select_query);
	$parking=$_POST["location"];//주차할 자리를 입력받아야됨
	$goDB="UPDATE pl SET location='$parking' WHERE num='1'";
	mysqli_query($conn, $goDB);
	$select_query2="SELECT num, location, t FROM pl";
    $result2=mysqli_query($conn, $select_query2);
    $getDT=mysqli_fetch_row($result2);
    $getdistance=$getDT[2];//아두이노에서 거리 가져와야함
	
	$select_query2="SELECT barcodenum FROM barcodenote";
	$result2=mysqli_query($conn,$select_query2);
	$barcode1=mysqli_fetch_row($result2);
	$barcode2=$barcode1[0];
	if($getdistance<=10){
		$barvalue = "";
		$lines = $barcode2;
		if ($lines != null){
			if($lines==$parking){
			//소리 OFF
			$query1="UPDATE parking_lots SET lot_status='parked' WHERE lot='$parking'";
			mysqli_query($conn, $query1);//DB내용을 parked로 바꿔야함 -> 자동으로 빨강색
			$query2="UPDATE parking_lots SET distance='$getdistance' WHERE lot='$parking'";
			mysqli_query($conn, $query2);//DB의 distance를 변경
			echo("<script>location.replace('B2F.php');</script>");
			}
			else{
				//소리 ON, 바코드가 서로다름
				echo("<script>location.replace('B2F.php');</script>");
			}
		}
		else{
			//소리 ON";바코드를 찍지 않은 상황에 주차를 하면 소리 ON
			echo("<script>location.replace('B2F.php');</script>");
		}
	}
	else{
		
		$row=mysqli_fetch_row($result1);
		$loc=$row[0];
		if($loc==$parking){
			$status=$row[1];
		}
		while($row=mysqli_fetch_row($result1)){
			$loc=$row[0];
			if($loc==$parking){
				$status=$row[1];
			}
		}
		if($status=='parked'){
			$query1="UPDATE parking_lots SET lot_Status='idle', p_time=NULL, distance='$getdistance' WHERE lot='$parking'";
			mysqli_query($conn, $query1);
		}
		//->빨간색으로 변했다가 거리가 멀어지면 초록색으로 원상복구 되어야함(주차된 차량 나감)
		echo("<script>location.replace('B2F.php');</script>");
	}
	mysqli_close($conn);
?>
