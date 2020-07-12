<?php
include("db_connect.php");
if($_POST['password']!==$_POST['password2']){
  echo "<script>
  alert('패스워드가 일치하지 않습니다.');
  history.go(-1);
  </script>";
  exit();
}
$sql=sprintf("INSERT INTO userinfo VALUES ('%s','%s','%s','')",mysqli_real_escape_string($conn,$_POST[name]),mysqli_real_escape_string($conn,$_POST[email]),mysqli_real_escape_string($conn,$_POST[password]));
$query=mysqli_query($conn,$sql);
if($query){
  header("Location:login.html");
}
else{
  echo "<script>
  alert('이미 사용중인 이메일입니다.');
  history.go(-1);
  </script>";
}
?>
