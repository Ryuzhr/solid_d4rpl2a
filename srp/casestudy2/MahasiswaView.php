<?php
include_once "Mahasiswa.php";

class MahasiswaView {
    public function showMahasiswa(Mahasiswa $mahasiswa) {
        $nama = $mahasiswa->getNama();
        $nim = $mahasiswa->getNim();
        $show = "Nama: " . $nama . ", NIM: " . $nim;
        return $show;
    }
}
?>
