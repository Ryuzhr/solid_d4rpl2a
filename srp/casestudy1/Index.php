<?php
include_once 'Persegi.php';
include_once 'PenghitungPersegi.php';

$persegi = new Persegi(5);
$penghitungPersegi = new PenghitungPersegi();
$luas = $penghitungPersegi->hitungLuas($persegi);
echo "Luas persegi dengan sisi " . $persegi->getSisi() . " adalah " . $luas;
?>
