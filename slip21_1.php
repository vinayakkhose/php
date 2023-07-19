<?php
setcookie("name",$_POST["t1"]);
setcookie("class",$_POST["t2"]);
setcookie("address",$_POST["t3"]);
?>
<html>
<body>
<form action="slip21_2.php" method="post">
Phy:-<input type="text" name="t4"><br>
Bio:-<input type="text" name="t5"><br>
Chem:-<input type="text" name="t6"><br>
Maths:-<input type="text" name="t7"><br>
Marathi:-<input type="text" name="t8"><br> 
English:-<input type="text" name="t9"><br>
<input type="submit">
</form>
</body>
</html>

