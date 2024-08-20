<?php 

// Penjualan Sederhana

// class Barang
class Barang
{
  // Property/Attribute
  public  $namaBarang,
  $hargaBarang,
  $stokBarang;

  // Method/Behavior
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
    echo 'Sudah berhasil instansiasi dari class barang';
  } */

}