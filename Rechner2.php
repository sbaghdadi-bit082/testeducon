<html>
<head>
<title>ergebnis.php</title>
</head>
<body>
	<form name="ergebnis.php" action="" method="post">
<?PHP

if ($operation == "plus")
    {
    $ergebnis = $zahl1 + $zahl2;
    }

if ($operation == "minus")
    {
    $ergebnis = $zahl1 - $zahl2;
    }

if ($operation == "mal")
    {
    $ergebnis = $zahl1 * $zahl2;
    }

if ($operation == "geteilt")
    {
    $ergebnis = $zahl1 / $zahl2;
    }


echo "<P><STRONG>Ergebnis: ",$ergebnis,"</STRONG></P>";

?>
	