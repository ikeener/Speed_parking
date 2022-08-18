<script type="text/javascript">
	var name;
	
    function newWindow(val){
		name = val;
		window.open("barcode.html", 
		name + " ",  "width=570, height=250, resizable = no, scrollbars = no, fullscreen=no, location = no");
		//바코드 내용 = 자리번호 + 공백
	}
</script>

<?php
  $conn = mysqli_connect('localhost','root','1234','finalproject');
  mysqli_select_db($conn, "finalproject");
 
  $lot = $_POST['B2F'];
  $date =date('Y-m-d h:i:s');
  $descript = "SELECT lot_status FROM parking_lots where lot='$lot'";
  $result_set = mysqli_query($conn, $descript);
  $row = mysqli_fetch_row($result_set);
  $status = $row[0];

  if($lot==NULL) 
  {
    print "<script language=javascript> alert('주차할 자리를 선택해주세요!'); location.replace('B2F.php');</script>";
    exit();
  }
  
  if($status=="idle")
  {
	  $status='reserve';
	  $query1 = "UPDATE parking_lots SET lot_status='reserve',p_time='$date' WHERE lot='$lot' ";
	  $result = mysqli_query($conn, $query1);
  }
  
  if($result) {
	  echo ("<script language=javascript>newWindow(\"$lot\"); location.replace('B2F.php');</script>");
    //print "<script language=javascript> alert('등록되었습니다!'); location.replace('B2F.php');</script>";
  } else {
    print "<script language=javascript> alert('등록실패했습니다. 다시 시도해주세요');location.replace('B2F.php'); </script>";
  }

  mysqli_close($conn);
?>