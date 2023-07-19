<?php
$con=mysql_connect("localhost","root","");
if($con==FALSE)
  die("database not connected");
mysql_select_db("cdj");
$a=$_POST["t1"];
$ans=mysql_query(" select Doctor.* from Doctor,Hospital,DH where Doctor.doc_no=DH.doc_no and Hospital.hosp_no=DH.hosp_no and hosp_name='$a'");
echo"<center>";
echo"<table border=1>";
echo"<tr>";
echo"<th>doctor no<th>doctor name<th>doctor address<th>city<th>area</th>";
echo"</tr>";
while($b=mysql_fetch_array($ans))
{
 echo"<tr>";
 echo"<td>$b[0]<td>$b[1]<td>$b[2]<td>$b[3]<td>$b[4]</td>";
 echo"</tr>"; 
}
echo"</table>";
echo"</center>";
?>