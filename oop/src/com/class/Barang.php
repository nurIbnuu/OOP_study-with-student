<?php 

// Penjualan Sederhana

// class Barang
class Barang
{
    // Property/Attribute
    // Property dulu baru Method
  public  $namaBarang, # = 'Tidak ada nama',
          $hargaBarang, # = 0,
          $stokBarang; # = 0;

    // Method/Behavior

    // Constructor
  public function __construct(string $inputNama = 'Tidak ada nama', int $inputHarga = 0, int $inputStok = 0)
  {
    // echo "Berhasil instansiasi Object Barang\n";
    $this->namaBarang = $inputNama;
    $this->hargaBarang = $inputHarga;
    $this->stokBarang = $inputStok;
  }

    // Destructor; pasti tampil terakhir, dilakukan sebelum program selesai
  // public function __destruct()
  // {
  //   // echo "Terima Kasih. Program selesai\n";
  // }

  public function tambahStok(int $jmlTambah) : void
  {
  $this->stokBarang += $jmlTambah;

  echo "Stok barang berhasil ditambah. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  }

  public function kurangiStok(int $jmlKurang) : void
  {
    $this->stokBarang -= $jmlKurang;

    echo "Stok barang berhasil dikurang. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  }

  public function cekStok() : bool
  {
    if($this->stokBarang > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
  }

  public function cetakInfoBarang() : void
  {
    echo "Nama Barang : {$this->namaBarang}\nHarga Barang : Rp. {$this->hargaBarang},00\nStok Barang : {$this->stokBarang} pcs\n";
  }




  /* public function salam()
  {
    echo 'Sudah berhasil instansiasi dari class Barang';
  } */

}