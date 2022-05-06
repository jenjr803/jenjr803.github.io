<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用陳列做線上月曆</title>
    <style>
        table{
            border-collapse: collapse; 
            /* 邊框合併, 否則預設值為分開(中間有小縫隙) */
        }
        table td{
            padding: 5px;
            text-align: center;
            border: 2px solid #aaa;
        }
        .weekend{
            background: pink;
        }
        .workday{
            background: white;
        }
        .today{
            background: lightgreen;
        }
    </style>
</head>
<body>
    <h3>設計迴圈1</h3>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php
for( $i=0; $i<6; $i++){
    echo "<tr>";
    for( $j=0; $j<7; $j++){
        echo "<td>";
        echo $j;
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>

<br>

<h3>設計迴圈2</h3>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php

for( $i=0; $i<6; $i++){
    echo "<tr>";
    for( $j=1; $j<=7; $j++){
        echo "<td>";
        echo ($i*7)+$j;
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>

<br><hr>
<H3>判斷當月第1天</H3>
<?php 
$month=4;
?>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php
$firstDay= date("Y-") . $month . "-1";
$firstWeekday= date("w", strtotime($firstDay));
$monthDays= date("t", strtotime($firstDay));
$lastDay= date("Y-") . $month . "-" . $monthDays;
$today= date("Y-m-d");

// $dateHouse=[];
// for($i=0; $i<$monthDays; $i++){
//     $date=date("Y-m-d", strtotime("+$i days", strtotime($firstDay)));
//     $dateHouse[]=$date;
// }
// echo "<pre>";
// print_r($dateHouse);
// echo "</pre>";

echo "月份" . $month;
echo "<br>";
echo "第一天是" . $firstDay;
echo "<br>";
echo "第一天是星期" . $firstWeekday;
echo "<br>";
echo "最後一天是" . $lastDay;
echo "<br>";
echo "當月天數共". $monthDays . "天";
echo "<br>";

for( $i=0; $i<6; $i++){
    echo "<tr>";

     for($j=0;$j<7;$j++){
        $d=$i*7+($j+1)-$firstWeekday-1;
        
        if($d>=0 && $d<$monthDays){
            $fs=strtotime($firstDay);
            $shiftd=strtotime("+$d days",$fs);
            $date=date("d",$shiftd);
            $w=date("w",$shiftd);
            $chktoday="";
            if(date("Y-m-d",$shiftd)==$today){
                $chktoday='today';
            }
            //$date=date("Y-m-d",strtotime("+$d days",strtotime($firstDay)));
            if($w==0 || $w==6){
                echo "<td class='weekend $chktoday' >";
            }else{
                echo "<td class='workday $chktoday'>";
            }
            echo $date;
            echo "</td>";
        }else{
            echo "<td></td>";
        }
            
        
    }
    echo "</tr>";
}
?>
</table>
<p style="height: 40vh;"></p>

</body>
</html>