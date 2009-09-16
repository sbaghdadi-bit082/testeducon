<html>
<head>
<title>rechner</title>
</head>
<body>
	<form name="Rechner" action="ergebnis.php" method="post">
	<b>Taschenrechner</b>
  <table border="1">
  	<tr>
  		<td>Wert1:</td>
		<td>	<input type="text"
				name="Zahl1"
				size="10"
				maxlength="15"
				
				>
		</td>
		</tr>
		<tr>
		<td>Wert2:</td>
		<td>	<input type="text"
				name="Zahl2"
				size="10"	
				maxlength="15"
				
				>
		</td>
		</tr>
		<tr>
		<td colspan="2">
		<input type="radio" name="rechenart" value="plus">plus<br>
		<input type="radio" name="rechenart" value="minus">minus<br>
		<input type="radio" name="rechenart" value="geteilt">geteilt<br>
		<input type="radio" name="rechenart" value="mal">mal<br>
		<input type="radio" name="rechenart" value="prozent">prozent<br>
		<input type="submit" name="button1" value="rechne">
		</td>
		</tr>
		</table>
		
</form>
</body>
</html>
