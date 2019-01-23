<?php
$vs = $_POST['vs'];
$bp = $_POST['bp'];
$ab = $_POST['ab'];
$sv = $_POST['sv'];
$tb = $_POST['tb'];
$fb = $_POST['fb'];
$tv = $_POST['tv'];
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
$pb = $_POST['pb'];
$eb = $_POST['eb'];
$nb = $_POST['nb'];
$av = $_POST['av'];
$sd = $_POST['sd'];
$en = $_POST['en'];
$gv = $_POST['gv'];
$la = $_POST['la'];
$lv = $_POST['lv'];


$a = array($vs, $bp, $ab, $sv, $tb, $fb, $tv, $ad, $sa, $ta, $hb, $xb, $yb, $jb, $fs, $no, $vb, $nn, $pb, $eb, $nb, $av, $sd, $en, $gv, $la, $lv
);

$d = file_get_contents('data2.json');
$d = json_decode($d, true);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data2.json', $d);

header('location: story2.php');
?>