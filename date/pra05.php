<h1>使用程式來控制時間</h1>

<?php
$today= date("Y-m-d l");
echo $today;

echo "<br>下週一<br>";
$todaytime=strtotime(date("Y-m-d"));

$n=10;
for( $i=0; $i<=$n; $i++){
    $nextweek=strtotime("+$i week", $todaytime);
    echo date("Y-m-d l", $nextweek) . "<br>";
}
?>