<?PHP
$nilai=80;
echo "CONTOH IF ELSE <br>";
if($nilai>80){echo "Selamat Anda Mendapat grade A <br>";}
elseif($nilai<=80 &&$nilai>=70){echo "Selamat Anda Mendapat grade B <br>";}
else {echo "Maaf Anda Belum dapat grade A <br>";};
echo "CONTOH SWITCH <br>";
switch($nilai){
    case 100 :echo "Nilai yang dipilih 100 <br>";
    break;
    case 90 :echo "Nilai yang dipilih 90 <br>";
    break;
}  
 echo "Contoh FOR <br>";

for($i=1;$i<=5;$i++) {
    echo "Looping FOR ke : ".$i."<br>";
}
echo "CONTOH WHILE <br>";
$j=1;
while($j<=5) {
    echo "Looping While ke : ".$j."<br>";
    $j++;
}
?>