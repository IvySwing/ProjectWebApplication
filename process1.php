<?php
$mn = $_POST['Male Name'];
$oc = $_POST['Occupation'];
$n = $_POST['Noun'];
$an = $_POST['Another Noun'];
$on = $_POST['One More Noun'];
$s = $_POST['Shape'];
$gn = $_POST['Guy Name'];
$vb = $_POST['Verb'];
$wn = $_POST['Woman Name'];
$bp = $_POST['Body Part'];
$av = $_POST['Another Verb'];
$fn = $_POST['Fourth Noun'];
$tn = $_POST['Fifth Noun'];
$rn = $_POST['Restaurant Name'];
$hm = $_POST['Historic Monument'];
$ov = $_POST['One More Verb'];
$sn = $_POST['Sixth Noun'];
$vn = $_POST['Seventh Noun'];
$en = $_POST['Eighth Noun'];
$fv = $_POST['Fourth Verb'];
$jn = $_POST['Just One More Noun'];
$ad = $_POST['Adjective'];
$sd = $_POST['Adjective #2'];
$em = $_POST['Emotion'];
$gv = $_POST['Verb #5'];
$nn = $_POST['Noun #9'];
$ln = $_POST['Last Noun'];
$lv = $_POST['Last Verb'];


$a = array("$mn", "$oc", "$n", "$an", "$on", "$s", "$gn", "$vb", "$wn", "$bp", "$av", "$fn", "$tn", "$rn", "$hm", "$ov", "$sn", "$vn", "$en", "$fv", "$jn", "$ad", "$sd", "$em", "$gv", "$nn", "$ln", "$lv"
);

$d = file_get_contents('data1.json');
$d = json_decode($d, true);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data1.json', $d);

header('location:../story1.php');
?>