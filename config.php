<?php

    //Host Name / ip Address
   $server = "localhost"; //127.0.0.1
    
   // User MySQL Server
    $user = "root";

    //password
    $pass ="";

    //Db name
    $db = "student";

    $conn = mysqli_connect($server , $user , $pass , $db);

    if(!$conn){

        echo "ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้";
    }//else{
        //echo "เชื่อมต่อกับฐานข้อมูลเรียบร้อยแล้ว"; //ถ้าต่อได้ก็จะแจ้งหรือไม่ขึ้น
    //}
    




?>