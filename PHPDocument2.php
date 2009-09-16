<?php

$zahl1=$_POST[zahl1];
$zahl2=$_POST[zahl2];
$zahl3=$_POST[zahl3];
$zahl4=$_POST[zahl4];
$zahl5=$_POST[zahl5];
$zahl6=$_POST[zahl6];
$zahl7=$_POST[zahl7];
$zahl8=$_POST[zahl8];
$zahl9=$_POST[zahl9];
$zahl0=$_POST[zahl0];


if ($_POST[plus])
{
$ergebnis=$zahl1 + $zahl2;
echo "$zahl1 + $zahl2 = $ergebnis";
}
else
{
if ($_POST[minus])
{
$ergebnis=$zahl1 - $zahl2;
echo "$zahl1 - $zahl2 = $ergebnis";
}
else
{
if ($_POST[multiplikation])
{
$ergebnis=$zahl1 * $zahl2;
echo "$zahl1 * $zahl2 = $ergebnis";
}
else
{
if ($_POST[division])
{
if ($zahl==0)
{
$ergebnis="$Error";
echo "$Error";
} else
{
$ergebnis=$zahl1 / $zahl2;
echo "$zahl1 / $zahl2 = $ergebnis";
}
}
else
{


echo
"<table>
<tbody>
<tr>
<td height=\"22\" width=\"100\" bordercolor=\"#0000FF\" bgcolor=\"#C0C0C0\" align=\"right\">\n";
$ergebnis;
echo
"</td>
</tr>\n";
echo
"<tr>
<td>
<form method=\"post\" action=\"rechner.php\">
<center>
<input type=\"submit\" value=\"1\" name=\"zahl1\">
<input type=\"submit\" value=\"2\" name=\"zahl2\">
<input type=\"submit\" value=\"3\" name=\"zahl3\"><br>
<input type=\"submit\" value=\"4\" name=\"zahl4\">
<input type=\"submit\" value=\"5\" name=\"zahl5\">
<input type=\"submit\" value=\"6\" name=\"zahl6\"><br>
<input type=\"submit\" value=\"7\" name=\"zahl7\">
<input type=\"submit\" value=\"8\" name=\"zahl8\">
<input type=\"submit\" value=\"9\" name=\"zahl9\"><br>
<input type=\"submit\" value=\"c\" name=\"reset\">
<input type=\"submit\" value=\"0\" name=\"zahl0\">
<input type=\"submit\" value=\"x\" name=\"multiplikation\"><br>
<input type=\"submit\" value=\"+\" name=\"plus\">
<input type=\"submit\" value=\"--\" name=\"minus\">
<input type=\"submit\" value=\"÷\" name=\"division\"><br>
<input type=\"submit\" value=\"³&#8730;\" name=\"wurzel3\">
<input type=\"submit\" value=\" = \" name=\"losung\" size=\"5\">
<center>
</form>
</td></tr><tr>
<td height=\"15\"><font size=\"1\" face=\"Arial\" color=\"#FF0000\">Wissenschaftlicher Rechner</font></td></tr>
</tbody></table>\n";

}
}
}
}
?> 