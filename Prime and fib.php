<?php
function prime($n){
echo " Prime no are: ";
for ($i=2;$i<= $n; $i++)
{ 
$isprime = True;
for($j=2;$j<= sqrt($i);$j++)
{
if($i % $j==0)
{
$isprime = false;
break;
}
}
if ($isprime)
echo $i." ";
}
}
function fib($m) {
echo "<br> fibseries are: ";
$f1=0;
$f2=1;
echo $f1." ";
echo $f2." ";
for ($i=2; $i<=$m; $i++)
{
$f3=$f1+$f2;
echo $f3," "; 
$f1= $f2;
$f2=$f3;
}
}
prime(20);
fib(10);
?>
