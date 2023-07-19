<?php
$no1=$_POST['t1'];
$no2=$_POST['t2'];
$ch=$_POST['r1'];
switch($ch)
{
    case 'aa':add($no1,$no2);
              break;
    case 'bb':sub($no1,$no2);
              break;   
    case 'cc':mul($no1,$no2);
              break;
    case 'dd':div($no1,$no2);
}
function add($no1,$no2)
{
$no3=$no1+$no2;
echo"addition=".$no3;
}
function sub($no1,$no2)
{
    $no3=$no1-$no2;
    echo"substraction=".$no3; 
}
function mul($no1,$no2)
{
    $no3=$no1*$no2;
    echo"multiplication=".$no3;
}
function div($no1,$no2)
{
    $no3=$no1/$no2;
    echo"divition=".$no3;
}
?>