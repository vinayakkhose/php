<?php
$a=$_POST['t1'];
$pattern="^[a-zA-Z]+.@([a-zA-Z]{5}).([a-zA-Z]{3})$";
if(preg_match("/$pattern/",$a))
   echo"valid";
else
   echo"invalid";   
?>