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
            font-size: 30px; 
            color: #000000;
        }
        div{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width: 1000px;
            height: 100px;
            background: linear-gradient(120deg,#F56EB3,#D09CFA,#A555EC,#F56EB3);
            border:8px solid #D23369;
          
            border-radius: 50px;
        }
        body{
            background: linear-gradient(120deg, #EEEEEE,#F9B5D0,#FF8E9E,#FF597B, #FF9E9E);
            height: 100vh;
        }
    </style>
</head>
<body>
    <div>
    <marquee direction="up" style="color: #7b1fa2; font-size:20px;">
        <h1>
    <?php

    $folder_upload = "photo/";
    $file_upload = $folder_upload.basename($_FILES["photo"]["name"]);
    //echo $file_upload;
    $uploadOK = 1;
    $file_ext = strtolower(pathinfo($file_upload,PATHINFO_EXTENSION));
    //echo $file_ext;
    
    if(isset($_POST["submit"])){
        $check_upload = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check_upload !== false){
            echo "ไฟล์ที่ส่งมาเป็นภาพ - ".$check_upload["mime"].".";
            $uploadOK = 1;
        }else{
            echo "คุณส่งไฟล์มาไม่ใช่ภาพ - ";
            $uploadOK = 0;
        }
    }

    if(file_exists($file_upload)){
        echo "ไม่สามารถส่งไฟล์ซ้ำได้";
        $uploadOk = 0;
    }

    if($_FILES["photo"]["size"] > 5242880) {
        echo "ไฟล์ขนาดเกิน 5 MB ได้";
        $uploadOk = 0;
    }

    if($file_ext != "jpg" && $file_ext != "png" && $file_ext != "gif" ) {
        echo "ส่งได้เฉพาะไฟล์ JPG, PNG, GIF เท่านั้น";
        $uploadOk = 0;
    }

    if($uploadOK == 0){
        echo "<br>ไม่สามารถส่งไฟล์ได้";
    }else{
        if(move_uploaded_file($_FILES["photo"]["tmp_name"],$file_upload)){
            echo "คุณส่งไฟล์ ".htmlspecialchars($_FILES["photo"]["name"])." เรียบร้อยแล้ว";
        }else{
            echo "<br>เกิดปัญหาในการส่งไฟล์";
        }
    }
?>
   </h1>
   </marquee>
</div>
</body>
</html>