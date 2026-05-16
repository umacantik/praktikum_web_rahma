<?php
$a="5";
$b="2.5";
$komentar="Selamat Datang";
echo ("Nilai variabel a adalah = $a <br>");
//Varaibel bertipe interger
echo ("Nilai variabel b adalah = $b <br>");
//Variable bertipe real
echo ("Nilai variabel komentar adalah = $komentar<br>");
//Variabel bertipe string
$tambah= $a + $b;
//rumus penjumlahan
$kurang= $a - $b;
//rumus pengurangan
$kali= $a * $b;
//rumus perkalian
$bagi= $a / $b;
//rumus pembagian

echo ("Hasil penjumlahan a dan b adalah = $tambah<br>");
echo ("Hasil pengurangan a dan b adalah = $kurang<br>");
echo ("Hasil perkalian a dan b adalah = $kali<br>");
echo ("Hasil pembagian a dan b adalah = $bagi<br>");

$nama = "ITM";
$garis = "============================================";
echo "<p>";
echo $garis. "<br>";
echo $komentar. "Di Lab". $nama. "<br>Selamat Belajar Pemograman web <br>";
echo $garis."<br>";


?>