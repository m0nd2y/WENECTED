<?php
include('db_connect.php');
session_start();
$sql="UPDATE userinfo SET basket='' WHERE name='{$_SESSION[name]}'";
$query=mysqli_query($conn,$sql);
if($query){
  echo "<script>
    alert('구매완료하였습니다.');
    history.go(-1);
  </script>";
  exit();
}
?>
