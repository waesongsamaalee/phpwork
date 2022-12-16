<?php

include "config.php";

$user = $_POST['username'];
$pass = $_POST['password'];

$com_sql = "SELECT * FROM account WHERE user_acc = $user AND pass_acc = $pass";
$com__query = mysqli_query($conn,$com_sql);
$com_result = mysqli_fetch_array($com__query);

if(!$com_result){
   echo "ไม่สามารถ Sign In ได้ เนื่องจากจาก ID student หรือ password ไม่ถูกต้อง" ;
   header("refresh: 2; url=login.html");
}else{
    echo "ยินดีต้อนรับ เข้าสู่ระบบ Student System";
    header("refresh: 2; url=home.php");
}



?>