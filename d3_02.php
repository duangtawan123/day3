<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d3_02 แสดงผลตัวแปรร่วมกับข้อความ</title>
</head>
<body>
    <?php

    $number1=10;
    $number2=20;

    //แสดงผล
     echo "ตัวเลขตัวที่ 1 เท่ากับ".$number1;
     echo "<br>";
     echo "ตัวเลขตัวที่ 2 เท่ากับ".$number2;

     //ใช้ tag h มาช่วย
     echo "<h1>ตัวเลขตัวที่ 1 เท่ากับ".$number1."</h1>";
     echo "<h1>ตัวเลขตัวที่ 2 เท่ากับ".$number2."</h1>";

     //แสดงผล => 10+20=30
     $sum =$number1+$number2;
     echo "10+20 =".$sum;
     echo "<br>";
     echo $number1." + ".$number2." = ".$sum;
     
     

     ?>
     <?php
     $number=100.5;
     $text="chonburi technical college";
     echo "<br>";

     var_dump($number);
     var_dump($text);
     echo "<br>";
     echo "<br>";
     echo strlen($text);
     echo "<br>";
     echo str_word_count($text);
     echo "<br>";
     echo strpos($text,"chon");
     echo(min(0, 150, 30, 20, -8, -200));
     echo(rand(10, 100));
     ?>


</body>
</html>
