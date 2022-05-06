<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>日期/時間練習</h1>
    <?php
    echo "<h3>未設定時區</h3>";
    echo date("Y-m-d H:i:s");
    // m為有前導0的月份
    echo "<hr>";
    
    echo "<h3>有設定時區</h3>";
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-n-d H:i:s");
        // n為沒有前導0的月份
    echo "<br>";
    echo date(" Y 年 n 月 d 日 H 點 i 分 s 秒 ");

    echo "<hr>"; echo "<br>";

    echo "<h2>strtotime</h2>";
    //時間日期字串格式 yyyy-mm-dd hh:mm:ss
    $time="2021-10-01 10:12:30";
    $s=strtotime($time);
    echo $time;
    echo "<br>";
    echo $s;
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l ",$s);
    echo "<br>";

    $splus=strtotime("+2 days",$s);
    echo date("西元 Y 年 m 月 d 日 l ",$splus);
    $splus=strtotime("+1 month",$s);
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l ",$splus);
    $splus=strtotime("-1 month",$s);
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l ",$splus);
    $splus=strtotime("+1 week",$s);
    echo "<br>";
    echo date("西元 Y 年 m 月 d 日 l ",$splus);
    ?>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
<hr><br>
<a href="/index.php">回首頁</a>
</body>
</html>