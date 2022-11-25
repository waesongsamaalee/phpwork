<?php

$num1 = $_POST['num1'];
$num2 =$_POST['num2'];
$op =$_POST['op'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
            font-size: 120px; 
            color: #CC0000;
        }
        p{
            text-align: center;
            font-size: 40px; 
            color: #660033;
        }
        div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 500px;
            height: 500px;
            background-color: #cdbcdb  ;
            border-radius: 10px;

        }
        h4{
            text-align: center;
            font-size: 40px; 
        }
        body{
            background: linear-gradient(120deg, #11a8a8, #7c4da1);
            height: 100vh;
        }
    </style>
</head>
<body>
<div><br><br><br><br><br>
    <p><b>ผลลัพธ์ที่ได้ :</b></p>
<h1>
<?php
switch ($op){
    case '+':
        function addNumber($num1,$num2){
            echo  $num1 + $num2;
            }
            echo addNumber($num1,$num2);
        break;
    case '-':
        function minusNumber($num1,$num2){
            echo  $num1 - $num2;
            }
            echo minusNumber($num1,$num2);
        break;
    case 'x':
        function multipleNumber($num1,$num2){
            echo  $num1 * $num2;
            }
            echo multipleNumber($num1,$num2);
        break;
    case '/':
        function divideNumber($num1,$num2){
            echo  $num1 / $num2;
            }
            echo divideNumber($num1,$num2);
        break;
    case 'xX':
        function exponentiationNumber($num1,$num2){
            echo  $num1 ** $num2;
            }
            echo exponentiationNumber($num1,$num2);
        break;


        default:
            function modulusNumber($num1,$num2){
            echo $num1 % $num2;
            }
            modulusNumber($num1,$num2);

    }

?>
</h1>

</div>
</body>
</html>