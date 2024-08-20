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
  public function cetakInfoPembeli() : void
  {
    echo "Nama Pembeli : {$this->nama}\nUmur Pembeli : {$this->umur} tahun\nJenis Kelamin : {$this->jenisKelamin}\nNomor Telepon : {$this->noTelp}\nAlamat Pembeli : {$this->alamat}\n";
  }

}