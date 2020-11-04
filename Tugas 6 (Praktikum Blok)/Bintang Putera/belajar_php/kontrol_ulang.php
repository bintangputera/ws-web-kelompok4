<?php
    $nilai = 100;
    echo "Contoh if else <br>";
    if($nilai >- 80 && $nilai <= 100){
        echo "Selamat anda mendapat nilai " .$nilai." grade A <br>";
    }else if($nilai <= 80 && $nilai >= 70){
        echo "Selamat anda mendapat nilai " .$nilai." grade B <br>";
    } else {
        echo "Nilai anda" .$nilai. "<br>";
    }

    echo "Contoh Switch <br>";
    switch($nilai){
        case 80:
            echo "Nilai yang dipilih 100 <br>";
        break;
        case 90:
            echo "Nilai yang dipilh 90<br>";
        break;
        default:
            echo "Nilai anda " .$nilai. "<br>"; 
    }
    echo "Contoh For <br>";

    for($i=5;$i>=1;$i--){
        echo "Looping for ke : " .$i. "<br>";
    }

    echo "Contoh While <br>";
    $j = 5;
    while($j >=1){
        echo "Looping while ke : " .$j. "<br>";
        $j--;
}
