<?php
// membuat array
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];

print_r($arrayBuah); // cara pertama
echo "<br>";
var_dump($arrayBuah); //cara kedua
echo "<br>";
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
} //cara ketiga
echo "<br>";
echo $arrayBuah[2];