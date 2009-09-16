<?php
$zeile1 = array(1,2,3,4);
$zeile2 = array(5,6,7,8);
$zeile3 = array(9,10,11,12);
$matrix = array($zeile1,$zeile2,$zeile3);
echo $matrix [1][2];
$matrix[0][3]= 6;

$summe1 = 0;
for($j = 0; $j < 3; $j ++) {
	for($i = 0; $i < 3; $i ++) {
		$summe1 = $summe1 + $gesamtrechnung [$j] [$i];
	}
}
echo $summe1;
showall($matrix);
?>