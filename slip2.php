<?php
$s1=$_POST['t1'];
$s2=$_POST['t2'];
$s3=$_POST['t3'];
$a=strpos($s1,$s2);
echo"1st occurences=".$a;
$a=strrpos($s1,$s2);
echo"<br>last occurences=".$a;
$a=substr_count($s1,$s2);
echo"<br>totol count=".$a;
$a=str_replace($s2,$s3,$s1);
echo"<br>replace string<br>=".$a;
?>