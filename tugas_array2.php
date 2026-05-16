<?php

#fungsi array 1: array_search
echo "<strong>Fungsi 1 array_search (mencari nilai array yang ingin kita cari menghasilkan nilai posisi index) : </strong> <br>";

echo "Daftar drama Korea : <br>";
$drakor = array("True Beauty", "Goblin", "Vincenzo", "Lovely Runner", "Queen of Tears");

foreach ($drakor as $value) {
    echo "$value<br>";
}

$cari = array_search("Vincenzo", $drakor);
echo "Drama Vincenzo ada di index: " . $cari;

$cari = array_search("Lovely Runner", $drakor);
echo "<br>Drama Lovely Runner ada di index: " . $cari;

echo "<br><br>";

#fungsi array 2: array_slice
echo "<strong>Fungsi 2 array_slice (memotong nilai array yang ingin kita tampilkan) : </strong> <br>";

$rating = [8.5, 9.0, 8.8, 9.2, 8.7, 9.5, 8.9, 9.1];

echo "Array sebelum array_slice : <br>";
foreach ($rating as $value) {
    echo "$value ";
}

$ambil_array = array_slice($rating, 2 ,3);
echo "<br>Array setelah array_slice : <br>";
foreach ($ambil_array as $value) {
    echo "$value ";
}

echo "<br><br>";

#fungsi array 3: array_splice
echo "<strong>Fungsi 3 array_splice (mengganti nilai array yang kita inginkan) : </strong> <br>";

$episode = [12, 16, 20, 18, 24];

echo "Array sebelum array_splice : <br>";
foreach ($episode as $value) {
    echo "$value ";
}

echo "<br>Array setelah array_splice : <br>";
array_splice($episode, 1, 1, 14);

foreach ($episode as $value) {
    echo "$value ";
}

echo "<br><br>";

#fungsi array 4: array_unique
echo "<strong>Fungsi 4 array_unique (menghapus nilai array yang duplikat) : </strong> <br>";

$array_duplikat = ["Goblin", "True Beauty", "Goblin", "Vincenzo", "Queen of Tears", "True Beauty"];

echo "Array sebelum array_unique : <br>";
foreach ($array_duplikat as $value) {
    echo "$value ";
}

echo "<br>Array setelah array_unique : <br>";
$nilai_unik = array_unique($array_duplikat);

foreach ($nilai_unik as $value) {
    echo "$value ";
}

echo "<br><br>";

#fungsi array 5: array_values
echo "<strong>Fungsi 5 array_values (mengambil nilai value array tanpa menampilkan key) : </strong> <br>";

$array_val = [
    "Drama1" => "Crash Landing on You",
    "Drama2" => "Business Proposal",
    "Drama3" => "All of Us Are Dead",
    "Drama4" => "Lovely Runner"
];

echo "Array sebelum array_values : <br>";
foreach ($array_val as $key => $value) {
    echo "$key => $value <br>";
}

$nilai = array_values($array_val);

echo "<br>Array setelah array_values : <br>";
foreach ($nilai as $value) {
    echo "$value <br>";
}

?>