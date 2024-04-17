<?php
include_once 'Mahasiswa.php';


include_once 'MahasiswaView.php';

$mahasiswa = new Mahasiswa("Ridhan Zake", "2205025");


$mahasiswaView = new MahasiswaView();

$infoMahasiswa = $mahasiswaView->showMahasiswa($mahasiswa);

echo $infoMahasiswa;
?>
