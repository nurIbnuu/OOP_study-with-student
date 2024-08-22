<?php 

class Pembeli
{
  // Property
  private   $nama,
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

  public function setNoTelp(string $noTelp) : void
  {
    $this->noTelp = $noTelp;
  }

  public function setAlamat(string $alamat) : void
  {
    $this->alamat = $alamat;
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

  public function getNoTelp() : string
  {
    return $this->noTelp;
  }

  public function getAlamat() : string
  {
    return $this->alamat;
  }

}