<?php

$name = array(
    "waesong",
    "waejong",
    "waezong",
    "waexong",
);


echo "<h2>Indexed Array</h2>";
echo "จำนวนข้อมูล ".count($name)."ชุด<br>";
echo"ข้อมูล Index 2 = ".$name[2]."<br>";
$num = 0;
while($num < count($name) ){
    echo 'ข้อมูล = '.$name[$num]."<br>";
    $num++;
}

echo "<hr color='green'>";
echo "<hr color='red'>";
echo "<hr color='gold'>";

for ($num = 0;$num < count($name); $num++){
    echo 'ข้อมูล ='.$name[$num]."<br>";
};

echo "<hr color='purple'>";
echo "<p>การใช้ foreach ดึงข้อมูล</p>";

foreach($name as $nm){
    echo $nm."<br>";
}
echo "<hr color='green'>";
echo "<hr color='red'>";
echo "<hr color='gold'>";

$student = array(
    "waesong" => "3.33", //key => value
    "waejong" => "2.22",
    "waezong" => "1.11",
    "waexong" => "0.00",
);
    echo "<h2>Associative Array</h2>";
    echo "จำนวนข้อมูล ".count($student)."ชุด<br>";
    echo"ข้อมูล Key[waesong] = ".$student["waesong"]."<br>";

    echo "<hr color='purple'>";
    echo "<p>การใช้ foreach ดึงข้อมูล</p>";
    
    foreach($student as $kstd => $vstd){
        echo "Key(kstd) :".$vstd."<br>";
    }

    echo "<hr color='yellow'>";
    echo "<p>การใช้ foreach ดึงข้อมูล</p>";

    $subjects = array (
        array("Basic HTML","1-4-3","Teera Binkasem"),
        array("Basic Database","1-2-2","Samroh Baka"),
        array("Basic Java","2-2-2","Fadeelah Demae"),
        array("Basic Network","2-3-3","Imron Sulong"),
        array("Basic Javascript","0-4-2","Hawanee Doloh")
  );
 echo "<h2>Multidimensional Arrays</h2>";
 echo"จำนวนข้อมูล ".count($subjects)."ชุด<br>";
 echo $subjects[4][1]."<br>";

 echo "<hr color='red'>";
echo "<p><h1>การใช้ for ดึงข้อมูล</h1></p>";

for($r = 0;$r< count($subjects);$r++){
    for($c = 0;$c < 3; $c++){
        echo 'ข้อมูลรายวิชา = '.$subjects[$r][$c]."<br>";
    }
    
    echo "<hr color='bluesky'>";
}
    

?>