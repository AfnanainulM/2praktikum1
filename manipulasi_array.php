<?php
$arrayBuah = ["Jeruk","Mangga","Pisang","Apel"];
// mengurutkan nilai suatu array
sort($arrayBuah);

//menghapus nilai array yang paling akhir
array_pop($arrayBuah);

// menghapus keseluruh isi variable
//unset($arrayBuah);
// bisa juga menghapus spesifik nilai array tertentu
unset($arrayBuah[1]);

// menambah nilai array di paling belakang
array_push($arrayBuah, "Durian");

// menghapus nilai array yang paling depan atau awal
array_shift($arrayBuah);

// menambah nilai array di paling depan
array_unshift($arrayBuah, "Semangka");

// mengganti /mengubah spesifik nilai array tertentu
$arrayBuah[0] = "Manggis";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}