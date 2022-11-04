<div class="container" align="center" style="
        border:dashed 2.5px #a609b4;
        padding:5px;
        display: medium none;
        display: auto;

        ">



//

<?php

$score = $_GET['score'];

if($score >= 90){
    echo "A+";

}elseif($score >= 80){
    echo "A";

}elseif($score >= 75){
    echo "B+";

}elseif($score >= 70){
   echo "B";
}
elseif($score >= 65){
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


//

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลคะแนน</title>
    <style>
        body {
          background-image:url('https://cdn.pixabay.com/photo/2022/05/31/00/56/sky-7232494_960_720.jpg');
          background-repeat: repeat;
        }
        
      </style>
</head>
<body>
<?php

$score = $_GET['score'];

if($score >= 90){
    echo "A+";

}elseif($score >= 80){
    echo "A";

}elseif($score >= 75){
    echo "B+";

}elseif($score >= 70){
   echo "B";
}
elseif($score >= 65){
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
</body>
</html>




