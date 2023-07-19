<html>
    <head>
</head>
 <body >
 <form method="post" action="slip24.php">
 Enter Username:<input type="text" name="t1"><br>
 Enter password: <input type="password" name="t2"><br> 
 <b><input type="submit"value="login"></b>
 </form>
 </body>
</html>
<?php
 $user=$_POST["t1"];
 $pass=$_POST["t2"];
 if(isset($_COOKIE["aryan"]))
 {
 $cnt=$_COOKIE["aryan"];
 $cnt=$cnt+1;
 setcookie("aryan",$cnt);
 }
 else
 setcookie("aryan",1);
 if($_COOKIE["aryan"]>3)
 die("Your attempts are over.....");
 if($user=="aryan" && $pass=="12345")
 header("location:slip24.html");
 else
 echo("Invalid user name and password");
?>