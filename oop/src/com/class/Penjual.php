<?php 

class Penjual
{
  // Property
  public  $nama,
          $umur,
          $jenisKelamin,
          $lamaKerjaPerTahun;

  // Method
  public function cetakInfoPenjual() : void
  {
    echo "Nama Penjual : {$this->nama}\nUmur Penjual : {$this->umur} tahun\nJenis Kelamin : {$this->jenisKelamin}\nLama Kerja Pertahun : {$this->lamaKerjaPerTahun} tahun\n";
  }
}