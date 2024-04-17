<?php
class Mahasiswa{
    private string $nama;
    private string $nim;

    public function __construct(string $nama,string $nim){
        $this->nama = $nama;
        $this->nim = $nim;
    }
    public function getNama():string {
        return $this->nama;
    }
    public function getNim():string {
        return $this->nim;
    }
 
}
