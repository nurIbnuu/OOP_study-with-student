<?php 

class Penjual
{
  // Property
  public  $nama,
          $umur,
          $jenisKelamin,
          $lamaKerjaPerTahun;

  // Method
  // Constructor
  public function __construct(string $nama = 'Tidak ada nama', int $umur = 0, string $jenisKelamin = 'Tidak ada jenis kelamin', int $lamaKerjaPerTahun = 0)
  {
    // cara lain, error wkwk
    // Penjual::$nama = $nama;
    // Penjual::$umur = $umur;
    // Penjual::$jenisKelamin = $jenisKelamin;
    // Penjual::$lamaKerjaPerTahun = $lamaKerjaPerTahun;
    $this->nama = $nama;
    $this->umur = $umur;
    $this->jenisKelamin = $jenisKelamin;
    $this->lamaKerjaPerTahun = $lamaKerjaPerTahun;
  }

  public function cetakInfoPenjual() : void
  {
    echo "Nama Penjual : {$this->nama}\nUmur Penjual : {$this->umur} tahun\nJenis Kelamin : {$this->jenisKelamin}\nLama Kerja Pertahun : {$this->lamaKerjaPerTahun} tahun\n\n";
  }
}