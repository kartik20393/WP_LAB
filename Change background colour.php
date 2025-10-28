<html> 
<head>
<title> COLOUR CHANGE BY DAY </title>
<?php
$daysofweek = array("Sunday" => 'red',
"Monday" => 'Pink',
"Tuesday"=> 'Green',
'Wednesday'=>'Yellow',
"Thursday" =>"Orange",
"Friday" => "Purple",
'Saturday' => 'Blue');
$currentday=date('l');
$backgroundcolor='lightblue';
if (array_key_exists ($currentday, $daysofweek )) { 
$backgroundcolor = $daysofweek [ $currentday];
}
?>
<style> 
body{
background-color: <?php echo $backgroundcolor; ?>
}
</style> 
</head>
<body>
<h1> Welcome!!! Today is <?php echo $currentday;?></h1>
</body>
</html>