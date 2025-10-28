<?php
try
{
$n= 10;
$d= 2;
if ($d===0)
throw new Exception ("Division by zero error");
$result = $n/$d;
echo"Result of Division:". $result. "<br>";
$dateString = '2023-12-25';
$dateFormat ='Y-m-d';
$date = DateTime::createFromFormat( $dateFormat,$dateString);
if (!$date || $date->format($dateFormat) !=$dateString)
throw new Exception ("Invalid date format ");
echo " Date is valid:". $dateString;
}
catch (Exception $e)
{
echo"Error:".$e->getMessage();
}
?>