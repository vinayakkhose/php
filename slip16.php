<?php
$n=$_POST['t1'];
$c=$_POST['t2'];
$u=$_POST['t3'];
$a=0;
$t=0;
if($u>250)
{
    $t=$u-250;
    $a=$a+$t*6.50;
    $u=$u-$t;
}
if($u>150)
{
    $t=$u-150;
    $a=$a+$t*5.20;
    $u=$u-$t;
}
if($u>50)
{
    $t=$u-50;
    $a=$a+$t*4.00;
    $u=$u-$t;
}
$a=$a+$u*3.50;

?>