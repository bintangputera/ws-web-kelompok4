<?php
    $punakawan = array("Semar", "Gareng", "Petruk", "Bagong");
    $reverse = array_reverse($punakawan);
    // echo $punakawan[0];
    // echo "<br>";
    // echo $punakawan[3];

    // $punakawan[1] = "Semar";
    // $punakawan[2] = "Gareng";
    // $punakawan[3] = "Petruk";
    // $punakawan[4] = "Bagong";

    $length = count($punakawan);

    for($i = 0; $i < $length; $i++){
        echo $reverse[$i] ."<br>";
    }

    echo "<br>";

    foreach ($reverse as $value) {
        echo $value ."<br>";
    }

    echo "<br>";

    for($a = $length - 1; $a >= 0; $a--){
        echo $punakawan[$a] . "<br>";
    }

    echo "<br>";

    $index = $length - 1;
    while($index >= 0){
        echo $punakawan[$index]. "<br>";
        $index--;
    }

    echo "<br>";                            
?>