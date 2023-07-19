<?php
$c=explode(" ",$_POST['t1']);
$n=explode(" ",$_POST['t2']);
$s=explode(" ",$_POST['t3']);
$r=explode(" ",$_POST['t4']);
echo"<html>";
echo"<body>";
echo"<table border='1'>";
echo"<tr><th>item code<th>item name<th>unit sold<th>rate</tr>";
echo"<tr><td>$c[0]<td>$n[0]<td>$s[0]<td>$r[0]</tr>";
echo"<tr><td>$c[1]<td>$n[1]<td>$s[1]<td>$r[1]</tr>";
echo"<tr><td>$c[2]<td>$n[2]<td>$s[2]<td>$r[2]</tr>";
echo"<tr><td>$c[3]<td>$n[3]<td>$s[3]<td>$r[3]</tr>";
echo"<tr><td>$c[4]<td>$n[4]<td>$s[4]<td>$r[4]</tr>";
echo"</table>";
echo"</body>";
echo"</html>";
?>