<?php
echo "MEMBUAT FUNGSI <br>";
function berhasil($nilai)
{
	echo "Selamat anda berhasil : ".$nilai;
}
function gagal()
{
	echo "MAAF anda gagal";
}
$nilai = 90;
if ($nilai>=75)
{ berhasil($nilai);
}else { gagal (); };
echo "<br>";
echo "Fungsi dengan parameter<br>";
function jumlah($a,$b)
{ return $a+$b; }
$nilai1=10;
$nilai2=15;
echo jumlah($nilai1,$nilai2);
echo "<br>";
echo "FUNGSI BAWAAN<br>";
$sekarang = getdate();
print_r($sekarang);
echo "<br>";
echo "sekarang tanggal :".$sekarang["mday"];
?>