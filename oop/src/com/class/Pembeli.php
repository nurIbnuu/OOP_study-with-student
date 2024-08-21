<?php 

class Pembeli
{
  // Property
  public  $nama,
          $umur,
          $jenisKelamin,
          $noTelp,
          $alamat;

  // Method
  // Constructor
  public function __construct(string $nama = 'Tidak ada nama', int $umur = 0, string $jenisKelamin = 'Tidak ada jenis kelamin', string $noTelp = 'Tidak ada nomor telepon', string $alamat = 'Tidak ada alamat')
  {
    $this->nama = $nama;
    $this->umur = $umur;
    $this->jenisKelamin = $jenisKelamin;
    $this->noTelp = $noTelp;
    $this->alamat = $alamat;
  }

  public function cetakInfoPembeli() : void
  {
    echo "Nama Pembeli : {$this->nama}\nUmur Pembeli : {$this->umur} tahun\nJenis Kelamin : {$this->jenisKelamin}\nNomor Telepon : {$this->noTelp}\nAlamat Pembeli : {$this->alamat}\n\n";
  }

}