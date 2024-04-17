<?php
include 'Debit.php';
include 'Kredit.php';
include 'Cash.php';
include 'PembayaranCustomer.php';

// Contoh penggunaan Debit
$debit = new Debit();
$pembayaranCustomer = new PembayaranCustomer();
$pembayaranCustomer->menerimaPembayaran($debit);
echo "\n";

// Contoh penggunaan Kredit
$kredit = new Kredit();
$pembayaranCustomer->menerimaPembayaran($kredit);
echo "\n";

// Contoh penggunaan Cash
$cash = new Cash();
$pembayaranCustomer->menerimaPembayaran($cash);
?>
