<?php
    include("db_connect.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     $sql=sprintf("SELECT name FROM userinfo WHERE email='%s' AND password='%s'",mysqli_real_escape_string($conn,$_POST[email]),mysqli_real_escape_string($conn,$_POST[password]));
     $result=mysqli_fetch_array(mysqli_query($conn,$sql));
     if($result['name']){
       $_SESSION['name']=$result['name'];
       echo "<script>
       alert('{$_SESSION['name']}님 로그인되었습니다.');
       location.href='shop.php';
       </script>";
       //header("Location:main.php");
     }
     else{
       echo "<script>
       alert('이메일이나 비밀번호가 일치하지 않습니다');
       history.go(-1);
       </script>";
       //header("Location:login.html");
     }
    }
?>
