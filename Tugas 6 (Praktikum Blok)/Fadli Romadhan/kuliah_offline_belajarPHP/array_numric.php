<?php

$numbers = array( 1, 2, 3, 4, 5);
foreach ($numbers as $value) 
{
	echo "Value is $value <br />";
}

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach (array_reverse($numbers) as $value) 
{
	echo "value is $value <br />";	
}
foreach ($numbers as $value) 
{
	echo "value is $value <br />";	
}
for ($i=count($numbers) ; $i <= 0; $i++){
	echo "<br/> menampilkan macam  : ".$numbers[$i];
}
?>