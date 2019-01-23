<?php
$mn = $_POST['mn'];
$oc = $_POST['oc'];
$n = $_POST['n'];
$an = $_POST['an'];
$on = $_POST['on'];
$s = $_POST['s'];
$gn = $_POST['gn'];
$vb = $_POST['vb'];
$wn = $_POST['wn'];
$bp = $_POST['bp'];
$av = $_POST['av'];
$fn = $_POST['fn'];
$tn = $_POST['tn'];
$rn = $_POST['rn'];
$hm = $_POST['hm'];
$ov = $_POST['ov'];
$sn = $_POST['sn'];
$vn = $_POST['vn'];
$en = $_POST['en'];
$fv = $_POST['fv'];
$jn = $_POST['jn'];
$ad = $_POST['ad'];
$sd = $_POST['sd'];
$em = $_POST['em'];
$gv = $_POST['gv'];
$nn = $_POST['nn'];
$ln = $_POST['ln'];
$lv = $_POST['lv'];


$a = array($mn, $oc, $n, $an, $on, $s, $gn, $vb, $wn, $bp, $av, $fn, $tn, $rn, $hm, $ov, $sn, $vn, $en, $fv, $jn, $ad, $sd, $em, $gv, $nn, $ln, $lv
);

$d = file_get_contents('data1.json');
$d = json_decode($d, true);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data1.json', $d);

header('location: story1.php');
?>