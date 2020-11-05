<?php
$purnakawan = array("Semar","Garong","Petruk","Bagong");
echo $purnakawan[0];
echo "<br>";
echo $purnakawan[3];

/*$purnakawan[1]="Semar";
$purnakawan[2]="Garong";
$purnakawan[3]="Petruk";
$purnakawan[4]="Bagong";
echo $purnakawan[0];*/

for ($i=count($purnakawan) - 1; $i >= 0; $i--){
	echo "<br/> menampilkan macam  : ".$purnakawan[$i];
}

echo "<br>";

$i = count($purnakawan) - 1;
while ($i >= 0){
	echo "<br> menampilkan macam ke $purnakawan[$i]";
	$i--;
}
foreach ($purnakawan as $key => $value) {
	echo "[$key] => $value";
}
?>