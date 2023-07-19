<?php
setcookie("a",$_POST["t1"]);
setcookie("b",$_POST["t2"]);
setcookie("c",$_POST["t3"]);
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Document</title>
</head>
<body>
    <form action="slip23a.php" method="post">
        <h1>product</h1>
        product name:-<input type="text" name="t4"><br>
        product qty:-<input type="text" name="t5"><br>
        product rate:-<input type="text" name="t6"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>