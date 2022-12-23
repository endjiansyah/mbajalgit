<?php 
//menghitung diskon jika harga lebih dari 100K, diskonnya20%

function hitungDiskon($uang){
if($uang > 100000){
$diskon = $uang / 5;
$harga = $uang - $diskon;
return $harga;
}else{
return $uang;
}
}

function ngitungDiskon($uang){
if($uang > 100000){
$diskon = $uang / 5;
$harga = $uang - $diskon;
return $harga;
}else{
return $uang;
}
}

$uang = 500000;
echo ngitungDiskon($uang);

?>