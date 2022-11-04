<?php
$score =  $_GET['score'];
$score = $_GET['score'];
$score = $_GET['score'];
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
            color: #0f0618;
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
            width: 600px;
            height: 600px;
            background: #ebc5df;
            border-radius: 10px;

        }
        h4{
            text-align: center;
            font-size: 40px; 
        }
        body{
            background: linear-gradient(120deg, #dd3bfd,);
            height: 100vh;
        }
    </style>
</head>
<body>
    <div>
     <p>คะเเนนของคุณได้</p>
    <h1 >
   
<?php
if($score >= 90){
    echo "A+";
}elseif($score >= 80){
    echo "A";
}elseif($score >= 75){
    echo "B+";
}elseif($score >= 70){
   echo "B";
}elseif($score >= 65){
    echo "C+";
}elseif($score >= 60){
    echo "C";
}elseif($score >= 55){
    echo "D+";
}elseif($score >= 50){
    echo "D";
}else{
    echo "F";
}   

?>
</h1>

 </div>
</body>
</html>


