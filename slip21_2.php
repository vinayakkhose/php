<?php
$name=$_COOKIE["name"];
$class=$_COOKIE["class"];
$address=$_COOKIE["address"];
$phy=$_POST['t4'];
$bio=$_POST['t5'];
$chem=$_POST['t6'];
$math=$_POST['t7'];
$marathi=$_POST['t8'];
$english=$_POST['t9'];
echo'<body>';
echo"<table border=1>";
echo"<tr><td>name<td>$name<tr>";
echo"<tr><td>class<td>$class<tr>";
echo"<tr><td>address<td>$address<tr>";
echo"<tr><td>phy<td>$phy<tr>";
echo"<tr><td>bio<td>$bio<tr>";
echo"<tr><td>chem<td>$chem<tr>";
echo"<tr><td>math<td>$math<tr>";
echo"<tr><td>mrathi<td>$marathi<tr>";
echo"<tr><td>english<td>$english<tr>";
echo'</table>';
echo"<body>";
?>