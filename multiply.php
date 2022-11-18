<?php
echo"สูตรคูณเเม่6<br>";
for($num = 1; $num <= 12; $num++){
    echo "6 x".$num."=".($num*6);
    echo"<br>";
}

echo "<hr color='green'>";

echo"สูตรคูณเเม่12<br>";
$num1 = 1;
while($num1 <= 12){
    echo "12x".$num1."=".($num1*12);
    echo"<br>";
    $num1++;
}

echo "<hr color='blue'>";
echo"สูตรคูณเเม่121<br>";
$num2 = 1; 
do{
    echo "121x".$num2."=".($num2*121);
    $num2++;
    echo"<br>";
}while($num2 <= 12)



?>