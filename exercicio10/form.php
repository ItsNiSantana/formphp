<?php

$camisetap = $_POST['camisetap'];
$camisetam = $_POST['camisetam'];
$camisetag = $_POST['camisetag'];

$tp = 10 * $camisetap;
$tm = 12 * $camisetam;
$tg = 15 * $camisetag;

$valora = $tp + $tm + $tg;

echo "O valor arrecadado é de R$$valora";

?>