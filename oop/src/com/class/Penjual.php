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


    // Method Setter
  public function setNama(string $nama) : void
  {
    $this->nama = $nama;
  }
  
  public function setUmur(int $umur) : void
  {
    $this->umur = $umur;
  }

  public function setJenisKelamin(string $jenisKelamin) : void
  {
    $this->jenisKelamin = $jenisKelamin;
  }

  public function setLamaKerjaPerTahun(int $lamaKerjaPerTahun) : void
  {
    $this->lamaKerjaPerTahun = $lamaKerjaPerTahun;
  }


    // Method Getter
  public function getNama() : string
  {
    return $this->nama;
  }
  
  public function getUmur() : int
  {
    return $this->umur;
  }

  public function getJenisKelamin() : string
  {
    return $this->jenisKelamin;
  }

  public function getLamaKerjaPerTahun() : int
  {
    return $this->lamaKerjaPerTahun;
  }
}