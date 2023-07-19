<?php
$a=$_COOKIE["a"];
$b=$_COOKIE["b"];
$c=$_COOKIE["c"];
$pn=$_POST["t4"];
$pq=$_POST["t5"];
$pr=$_POST["t6"];
$tot=$pq*$pr;
echo("<center>");
 echo("<table border=1>");
 echo("<caption>cust name :$a<br> address:$b<br>ph_no:$c</caption>");
 echo("<tr><td>product name <td>$pn</tr>");
 echo("<tr><td>product qty<td>$pq</tr>");
 echo("<tr><td>product rate<td>$pr</tr>");
 echo("<tr><th colspan='2'>Total bill: $tot</tr>");
 echo("</table>");
 echo("</center>");
?>