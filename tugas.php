<?php  
function pembagian($nilai1, $nilai2)
{
    if ($nilai2 != 0) {
        return $nilai1 / $nilai2;
    } else {
        return "Error: Pembagian oleh nol tidak diperbolehkan.";
    }
}

$hasilPembagian = pembagian(15, 3);
echo $hasilPembagian;  
$hasilPembagian = pembagian(8, 4);
echo $hasilPembagian;  

$hasilPembagian = pembagian(14, 7);
echo $hasilPembagian; 
?>