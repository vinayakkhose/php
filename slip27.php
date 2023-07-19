<?php
$con=mysql_connect("localhost","root","");
if($con==FALSE)
  die("database not connected");
mysql_select_db("cdj");
$a=$_POST["t1"];
$ans=mysql_query(" select employee2.* from employee2,project1,PE where employee2.eno=PE.eno and project1.pno=PE.pno and p_name='$a'");
while($b=mysql_fetch_array($ans))
{
 echo"<br>employee no=".$b[0];
 echo"<br>employee name=".$b[1];
 echo"<br>qualification=".$b[2];
 echo"<br>join date=".$b[3];
}
?>