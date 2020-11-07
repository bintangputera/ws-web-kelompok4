<?php
$purnakawan = array("Semar","Gareng","Petruk","Bagong");
echo $purnakawan[0];    //Hasilnya Semar
echo "<br>";
echo $purnakawan[3];    //Hasilnya Bagong

echo "<br>";

// $purnakawan[1]="Semar";
// $purnakawan[2]="Gareng";
// $purnakawan[3]="Petruk";
// $purnakawan[4]="Bagong";
   for ($i=count($purnakawan)-1; $i < count($purnakawan) ; $i++) { 
       echo $purnakawan[$i];
}
?>