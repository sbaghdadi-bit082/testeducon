<html>
<head>
<title>Ausgabe Quadratzahlen in PHP</title>
</head>
<body>
<?php
include 'ext_dat_ein/functions.php';
for($i = 0; $i < 10; $i ++) {
	$quad [$i] = $i * $i;

}
showAll ( $quad );
?>
</body>
</html>