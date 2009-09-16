<?php
include 'functions.php';

$zeile1 = array (1, 2, 3, 4 );
$zeile2 = array (5, 6, 7, 8 );
$zeile3 = array (9, 10, 11, 12 );

$matrix = array ($zeile1, $zeile2, $zeile3 );
$matrix [0] [3] = 6;

$summe = 0;
for($j = 0; $j < 3; $j ++) {
	for($i = 0; $i < 4; $i ++) {
		$summe = $summe + $matrix [$j] [$i];
	}
}
//echo $summe;
//showAll($matrix);
//Kommentar für Github Test
//Kommentar für Github Test2
//Kommentar für Github Test3
showAsTable($matrix);
?>