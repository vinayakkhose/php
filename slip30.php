<?php
$con=mysql_connect("localhost","root","");
if($con==FALSE)
  die("database not connected");
mysql_select_db("cdj");
$a=$_POST["t1"];
$ans=mysql_query("select student1.* from student1,competition,sc where student1.stud_id=sc.stud_id and competition.c_no=sc.c_no and sc.rank='fist' and competition.name='$a'");
while($b=mysql_fetch_array($ans))
{
 echo"<br>student_id=".$b[0];
 echo"<br>student_name=".$b[1];
 echo"<br>student_class=".$b[2];
}
?>