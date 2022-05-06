<h1>時間格式練習</h1>
<hr>
<pre>
<h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3>
2021/10/05
10月5日 Tuesday
2021-10-5 12:9:5
2021-10-5 12:09:05
今天是西元2021年10月5日 上班日(或假日)
</pre>
<hr>
<?php
date_default_timezone_set("Asia/Taipei"); ?>
<?= date("Y/m/d"); ?>
<hr>
<?= date("n月j日 l"); ?>
<hr>
<?= date("Y-n-j G:") . (int)date("i") . ":" . (int)date("s"); ?>
<hr>
<?= date("Y-m-d H:i:s"); ?>
<hr>
<?php

$workday = "";
$w = date("w");
if ($w == 0 || $w == 6) {
    $workday = "假日";
} else {
    $workday = "工作日";
}
echo date("今天是西元Y年n月j日 ") . $workday;; ?>