<?php
include('db_connect.php');
session_start();
$product=$_GET['product']."|";
$sql="SELECT basket FROM userinfo WHERE name='{$_SESSION[name]}'";
$result=mysqli_fetch_array(mysqli_query($conn,$sql));
if(strpos($result[0],$product)!==false){
  echo "<script>
    alert('이미 장바구니에 추가되어있습니다.');
    history.go(-1);
  </script>";
  exit();
}
$sql="UPDATE userinfo SET basket=CONCAT(basket,'{$product}') WHERE name='{$_SESSION[name]}'";
$query=mysqli_query($conn,$sql);
if($query){
  echo "<script>
    alert('장바구니에 추가되었습니다');
    history.go(-1);
  </script>";
}
?>
