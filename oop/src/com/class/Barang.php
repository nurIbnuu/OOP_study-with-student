<?php 

// Penjualan Sederhana

// class Barang
        /* Class & Method */
class Barang
{
    // Property/Attribute
    // Property dulu baru Method
  private   $namaBarang, # = 'Tidak ada nama',
            $hargaBarang, # = 0,
            $stokBarang; # = 0;


    // Method/Behavior

    // Constructor
  // Overloading
  // public function __construct()
  // {
  // }
  // public function __construct(string $inputNama)
  // {
  //   $this->namaBarang = $inputNama;
  // }
  // public function __construct(string $inputNama, int $inputHarga)
  // {
  //   $this->namaBarang = $inputNama;
  //   $this->hargaBarang = $inputHarga;
  // }
  protected function __construct(string $inputNama = 'Tidak ada nama', int $inputHarga = 0, int $inputStok = 0)
  {
    // echo "Berhasil instansiasi Object Barang\n";
    $this->namaBarang = $inputNama;
    $this->hargaBarang = $inputHarga;
    $this->stokBarang = $inputStok;
      // contoh property diakses dari class sendiri
    // $this->namaProperty; adalah akses dari class itu sendiri (public, protected, private)
  }

    // Destructor; pasti tampil terakhir, dilakukan sebelum program selesai
  // public function __destruct()
  // {
  //   // echo "Terima Kasih. Program selesai\n";
  // }

  // Overloading
  // public function tambahStok() : void
  // {
  // $this->stokBarang += 1;

  // echo "Stok barang berhasil ditambah. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  // }
  protected function tambahStok(int $jmlTambah) : void
  {
    $this->stokBarang += $jmlTambah;

    echo "Stok barang berhasil ditambah. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  }


  // public function kurangiStok() : void
  // {
  //   $this->stokBarang -= 1;

  //   echo "Stok barang berhasil dikurang. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  // }
  protected function kurangiStok(int $jmlKurang) : void
  {
    $this->stokBarang -= $jmlKurang;

    echo "Stok barang berhasil dikurang. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  }


  // Overloading
  // Masih ada stok barang?
  // public function cekStok() : bool
  // {
  //   if($this->stokBarang > 0)
  //   {
  //     return true;
  //   }
  //   else
  //   {
  //     return false;
  //   }
  // }
  protected function cekStok(bool $status) : bool
  {
    if($status)
    {
      // stok barang masih kan?
      if($this->stokBarang > 0)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    else
    {
      // stok barang udah habis kan?
      if($this->stokBarang > 0)
      {
        return false;
      }
      else
      {
        return true;
      }
    }
  }

    // contoh method diakses dari class sendiri (public, protected, private)
  // public function contoh()
  // {
  //   $this->tambahStok();
  // }

  protected function cetakInfoBarang() : void
  {
    echo "Nama Barang : {$this->namaBarang}\nHarga Barang : Rp. {$this->hargaBarang},00\nStok Barang : {$this->stokBarang} pcs\n";
  }

    // Method Setter; tidak mengembalikan nilai/void karena hanya mengeset data
  protected function setNamaBarang(string $namaBarang) : void
  {
    $this->namaBarang = $namaBarang;
  }

  protected function setHargaBarang(int $hargaBarang) : void
  {
    $this->hargaBarang = $hargaBarang;
  }

  protected function setStokBarang(int $stokBarang) : void
  {
    $this->stokBarang = $stokBarang;
  }


    // Method Getter; mengembalikan nilai/return
  protected function getNamaBarang() : string
  {
    return $this->namaBarang;
  }

  protected function getHargaBarang() : int
  {
    return $this->hargaBarang;
  }

  protected function getStokBarang() : int
  {
    return $this->stokBarang;
  }


  public function Set($namaBarang)
  {
    $this->namaBarang = $namaBarang;
  }


  /* public function salam()
  {
    echo 'Sudah berhasil instansiasi dari class Barang';
  } */

}