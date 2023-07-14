<?php  
//Tipe data Integer//
$umur = 20;

var_dump($umur);

// Float//
$phi = 3.14;
var_dump($phi);

// String//
$nama = "Salman";

var_dump($nama);

echo"<br>";

echo "Assalamualaikum $nama Umur Saya $umur. Nilai 'phi' adalah $phi";

// Boolean//
$isStudent = true;

echo "<br>";

var_dump($isStudent);

// Array: Indexing //
$siswa = ["Salman", 19,true];

echo "Assalamu'alaikum nama saya $siswa[0], umur saya adalah $siswa[1] tahun.";
echo "<br>";
// Array: Asosiatif
$mahasiswa = ["nama" => "Salman Alfarisi", "umur" => 19, "IPK" => 4.0];

echo "Hai saya $mahasiswa[nama], saya seorang mahasiswa dengan IPK $mahasiswa[IPK]";
?> 