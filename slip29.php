<?php
$con=mysql_connect("localhost","root","");
if($con==FALSE)
  die("database not connected");
mysql_select_db("cdj");
$ch=$_POST['t6'];
switch($ch)
{
    case 1:$an=$_POST['t1'];
    $res=mysql_query("select Movie.* from Movie,Actor,MA where Movie.movie_no=MA.movie_no and Actor.actor_no=MA.actor_no and Actor.name='$an'")
    while($row=mysql_fetch_array($res))
    {
        echo"<br> movie name=".$row[0];
        echo"<br> movie name=".$row[1];
        echo"<br> movie name=".$row[2];
    }
    case 2:$mno=$_POST['t2'];
           $mname=$_POST['t2'];
           $ry=$_POST['t2'];
           $res=mysql_query("insert into Movie($mno,'$mname',$ry)");
           echo"insert successfully";
           break;
    case 3:       
}
mysql_close($con);
?>