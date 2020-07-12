<?php
include('db_connect.php');
session_start();
$product=$_GET['product']."|";
$sql="SELECT basket FROM userinfo WHERE name='{$_SESSION[name]}'";
$result=mysqli_fetch_array(mysqli_query($conn,$sql));
$result[0]=str_replace($product,'',$result[0]);
$sql="UPDATE userinfo SET basket='{$result[0]}' WHERE name='{$_SESSION[name]}'";
$query=mysqli_query($conn,$sql);
if($query){
  echo "<script>
    alert('제거되었습니다');
    history.go(-1);
  </script>";
}
?>
