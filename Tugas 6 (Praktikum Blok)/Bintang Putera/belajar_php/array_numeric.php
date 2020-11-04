<?php

$numbers = array(1,2,3,4,5);

foreach ($numbers as $key => $value) {
    echo "Value is " .$value. "<br>";
}

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
$reverse = array_reverse($numbers);

echo "<br>";

foreach ($reverse as $key => $value) {
    if($key <= 2){
        echo $reverse[$key];
    }
}

?>