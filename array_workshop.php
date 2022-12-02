<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$num4 = $_GET['num4'];
$num5 = $_GET['num5'];
$num6 = $_GET['num6'];
$num7 = $_GET['num7'];
$num8 = $_GET['num8'];
$num9 = $_GET['num9'];
$num10 = $_GET['num10'];
$num11 = $_GET['num11'];
$num12 = $_GET['num12'];
$pro = $_GET['pro'];


$number = array(
    'num1'=> $num1,
    'num2'=> $num2,
    'num3'=> $num3,
    'num4'=> $num4,
    'num5'=> $num5,
    'num6'=> $num6,
    'num7'=> $num7,
    'num8'=> $num8,
    'num9'=> $num9,
    'num10'=> $num10,
    'num11'=> $num11,
    'num12'=> $num12
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ที่ได้</title>
    <style>
        h1{
            text-align: center;
            font-size: 200px; 
            color: #6633FF;
        }
        p{
            text-align: center;
            font-size: 40px; 
        }
        div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 450px;
            height: 450px;
            background: #EEF0EA;
            border-radius: 25px;

        }
        h4{
            text-align: center;
            font-size: 40px; 
        }
        body{
            background: linear-gradient(120deg, #FF9292, #845EC2, #EB96AB);
            height: 100vh;
        }

    </style>
    <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-5"> <br> <br>
        <div style="text-align: center;">
        <p>ข้อมูล</p>
<?php
echo "<table>";
switch ($pro) {
    case 'จำนวนข้อมูล':
        echo "<h1style=text-align:center; border: 2px'>จำนวนข้อมูล";
        echo count($number);
        echo "ชุด</h1>";
        break;
    
    default:
    foreach($number as $kstd => $vstd){
        echo "key($kstd)"."=>"."($vstd)"."<br>";
     }
        break;
}
   

?>