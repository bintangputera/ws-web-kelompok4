<?php
    $keluarga = array("Ayah", "Ibu", "Kakak", "Adik", " Aku");
    $reverse = array_reverse($keluarga);
    // echo $keluarga[0];
    // echo "<br>";
    // echo $punakawan[3];

    // $keluarga[1] = "Semar";
    // $keluarga[2] = "Gareng";
    // $keluarga[3] = "Petruk";
    // $keluarga[4] = "Bagong";

    $length = count($keluarga);

    for($i = 0; $i < $length; $i++){
        echo $reverse[$i] ."<br>";
    }

    echo "<br>";

    foreach ($reverse as $value) {
        echo $value ."<br>";
    }

    echo "<br>";

    for($a = $length - 1; $a >= 0; $a--){
        echo $keluarga[$a] . "<br>";
    }

    echo "<br>";

    $index = $length - 1;
    while($index >= 0){
        echo $keluarga[$index]. "<br>";
        $index--;
    }

    echo "<br>";                            
?>