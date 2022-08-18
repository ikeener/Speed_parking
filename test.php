<?php
$db_host = "localhost";
$db_user = "root";
$db_passwd = "1234";
$db_name = "finalproject";
 
$conn = mysqli_connect('localhost','root','1234', 'finalproject');
 
if (mysqli_connect_errno()){
    
    echo "MySQL 연결 오류: " . mysqli_connect_error();
    
    exit;
    
} else {
    
    echo "DB : \"$db_name\"에 접속 성공.<br/>";
    
    $num=$_GET["num"];
        $sql = "UPDATE pl SET t=$num";
    $result = mysqli_query($conn, $sql);
    
    mysqli_close($conn);
}
?> 