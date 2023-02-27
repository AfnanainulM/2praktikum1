<?php
// assosiatif array
$profileArray = [
    "nama" => "Afnan",
     "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];

echo "<br>";

$profileMultiArray = [
    [
        "nama" => "Afnan",
        "semester" => 2
    ], [
        "nama" => "Jeonghan",
        "semester" => 8
    ], [
        "nama" => "Beomgyu",
        "semester" => 4
    ]
];

foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}