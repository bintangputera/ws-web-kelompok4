<?php
    echo "Membuat fungsi <br>";
    function berhasil($a){
        echo "Selamat anda berhasil nilai anda : " .$a ;
    }

    function gagal(){
        echo "Selamat anda gagal";
    }

    $nilai = 90;
    if ($nilai >= 75){
        berhasil($nilai);
    } else {
        gagal();
    }

    echo "<br><br> Fungsi Dengan Parameter <br>";

    function jumlah($a, $b){
        return $a + $b;
    }

    $nilai1 = 10;
    $nilai2 = 15;

    echo jumlah($nilai1, $nilai2);
    echo "<br>";

    echo "<br>Fungsi Bawaan<br>";
    $sekarang = getdate();
    print_r($sekarang);
    echo "<br> Sekarang tahun " . $sekarang["year"];
    echo "<br> Sekarang bulan " . $sekarang["month"];
    echo "<br> Sekarang tanggal " . $sekarang["mday"];
?>