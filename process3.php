<?php
$vs = $_POST['vs'];
$bp = $_POST['bp'];
$ab = $_POST['ab'];
$sv = $_POST['sv'];
$tb = $_POST['tb'];
$fb = $_POST['fb'];
$tv = $_POST['tv'];
$pn = $_POST['pn'];
$ad = $_POST['ad'];
$sa = $_POST['sa'];
$ta = $_POST['ta'];
$hb = $_POST['hb'];
$xb = $_POST['xb'];
$yb = $_POST['yb'];
$jb = $_POST['jb'];
$fs = $_POST['fs'];
$no = $_POST['no'];
$vb = $_POST['vb'];
$nn = $_POST['nn'];


$a = array($vs, $bp, $ab, $sv, $tb, $fb, $tv, $pn, $ad, $sa, $ta, $hb, $xb, $yb, $jb, $fs, $no, $vb, $nn
);

$d = file_get_contents('data3.json');
$d = json_decode($d, true);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data3.json', $d);

header('location: story3.php');
?>