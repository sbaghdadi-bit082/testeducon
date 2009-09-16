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
		<type="radio" name="rechenart" value="plus">
		<type="radio" name="rechenart" value="minus">
		<type="radio" name="rechenart" value="geteilt">
		<type="radio" name="rechenart" value="mal">
		<type="radio" name="rechenart" value="prozent">
		</td>
		</tr>
	
	<input type="submit" name="button1" value="rechne">
	
		</tr>
		</table>>
		
</form>
</body>
</html>
