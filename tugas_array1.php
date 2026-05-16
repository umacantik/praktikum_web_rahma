<?php 

$drakor = array(
    "Crash Landing on You" => "2019",
    "Goblin" => "2016",
    "True Beauty" => "2020",
    "Business Proposal" => "2022",
    "Lovely Runner" => "2024",
    "Queen of Tears" => "2024",
    "All of Us Are Dead" => "2022",
    "Vincenzo" => "2021"
);

echo "<strong>Tampilan awal array : </strong><br>";
foreach ($drakor as $nama => $tahun) {
    echo "$nama tahun rilis $tahun <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array ascending berdasarkan value : </strong><br>";
asort($drakor);
foreach ($drakor as $nama => $tahun) {
    echo "$nama tahun rilis $tahun <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array ascending berdasarkan key: </strong><br>";
ksort($drakor);
foreach ($drakor as $nama => $tahun) {
    echo "$nama tahun rilis $tahun <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan value: </strong><br>";
arsort($drakor);
foreach ($drakor as $nama => $tahun) {
    echo "$nama tahun rilis $tahun <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan key: </strong><br>";
krsort($drakor);
foreach ($drakor as $nama => $tahun) {
    echo "$nama tahun rilis $tahun <br>";
}

echo "<br>";

echo "<strong>Mengurutkan array descending berdasarkan value: </strong><br>";
rsort($drakor);
foreach ($drakor as $nama => $tahun) {
    echo "Tahun rilis drakor : $tahun <br>";
}

?>