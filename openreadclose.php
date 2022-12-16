<?php


    $file1 = fopen('waesong.txt','r') or die("ไม่พบไฟล์ที่ต้องการ");

   echo fread($file1,filesize('waesong.txt'));

    fclose($file1);




?>