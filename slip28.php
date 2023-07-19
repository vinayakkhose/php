<?php
$con=mysql_connect("localhost","root","");
if($con==FALSE)
  die("database not connected");
mysql_select_db("cdj");
$a=$_POST["t1"];
$ans=mysql_query("select student3.*,st.subject from student3,teacher,st where student3.sno=st.sno and teacher.tno=st.tno and t_name='$a'");
while($b=mysql_fetch_array($ans))
{
 echo"<br>student_id=".$b[0];
 echo"<br>student_name=".$b[1];
 echo"<br>student_class=".$b[2];
 echo"<br>student_add=".$b[3];
 echo"<br>student_subject=".$b[4];
}
?>