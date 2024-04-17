<?php
include_once 'Mahasiswa.php';

// Include file mhsview.php untuk mengakses kelas MahasiswaView
include_once 'MahasiswaView.php';

// Buat objek Mahasiswa dengan nama "John Doe" dan NIM "123456"
$mahasiswa = new Mahasiswa("John Doe", "123456");

// Buat objek MahasiswaView
$mahasiswaView = new MahasiswaView();

// Tampilkan informasi mahasiswa menggunakan method showMahasiswa dari kelas MahasiswaView
$infoMahasiswa = $mahasiswaView->showMahasiswa($mahasiswa);

// Tampilkan hasilnya
echo $infoMahasiswa;
?>
