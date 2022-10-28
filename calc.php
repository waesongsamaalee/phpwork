<?php
     $_POST['base']  ? 
     $base = $_POST['base'] : $base = 0;
     $_POST['height']  ?
     $height = $_POST['height'] : $height = 0;

    if( $base > 0 && $height > 0 ) {
        $area = 1.0 / 2.0 * ( $base * $height );
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พื้นที่สามเหลี่ยมหน้าจั่ว</title>
</head>
<body>
    <br>
<p style='color:red'>
<?php
echo "ฐาน เท่ากับ".$base."<br>";
echo "ความสูง เท่ากับ".$height."<br>";
echo "พื้นที่สามเหลี่ยมหน้าจั่ว เท่ากับ".$area ."<br>";
?>
</p>

</body>
</html>