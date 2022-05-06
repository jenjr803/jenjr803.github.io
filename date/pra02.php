<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>給定2個日期, 計算中間間隔天數</h1>
    <h3>strtotime函數為計算變數日期至 January 1 1970 00:00:00 GMT 起的秒數, 又稱UNIX時間戳</h3>
    <hr><br>

    <?php
    $date1 = "2022-4-10";
    $date2 = "2022-4-20";

    echo "日期一: " . $date1 . "<br>";
    echo "日期二: " . $date2 . "<br>";

    $time1 = strtotime($date1);
    $time2 = strtotime($date2);

    echo $time1, "<br>", $time1 / (24 * 60 * 60);

    
    echo "<br>";
    echo $time2;
    $gap = ($time2 - $time1 - (24 * 60 * 60));
    $gap = $gap / (60 * 60 * 24);


    $duration = ($time2 - $time1 + (24 * 60 * 60));
    $duration = $duration / (60 * 60 * 24);

    $diff = ($time2 - $time1);
    $diff = $diff / (60 * 60 * 24);
    echo "<hr>";
    echo "中間間隔 " . $gap . " 天<br>";
    echo "經過了 " . $duration . " 天<br>";
    echo "相差了 " . $diff . " 天<br>";
    ?>

</body>

</html>