<?php
$s=$_POST['t1'];
$ch=$_POST['r1'];
switch($ch)
{
    case "aa":vcount($s);
              break;
    case "bb":total_occurences($s);
              break;   
    case "cc":palindrom($s);                 
}
function vcount($s)
{
    $a=array('a','i','e','o','u');
    $count=0;
    for($i=0;$i<strlen($s);$i++)
    {
        if(in_array($s[$i],$a))
        {
            $count++;
        }
    }
    echo"totol vowel:-".$count;
}
function total_occurences($s)
{
    $a=$b=$c=$d=$e=0;
    for($i=0;$i<strlen($s);$i++)
    {
    if($s[$i]=='a')
     $a++;
    if($s[$i]=='e')
     $b++;
    if($s[$i]=='i')
     $c++;
    if($s[$i]=='o')
     $d++;
    if($s[$i]=='u')
     $e++;
    }
    echo"<br>a occurence=".$a;
    echo"<br>e occurence=".$b;
    echo"<br>i occurence=".$c;
    echo"<br>o occurence=".$d;
    echo"<br>u occurence=".$e;
}
function palindrom($s)
{
    $f=0;
    $j=strlen($s)-1;
    for($i=0;$i<=(strlen($s)/2);$i++,$j--)
    {
        if($s[$i]!=$s[$j])
        {
        $f=1;
        break;
        }
    }
    if($f==0)
    echo"palindrom";
    else
    echo"not palindrome";
}
?>