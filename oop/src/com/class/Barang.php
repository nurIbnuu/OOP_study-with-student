<?php 

// Penjualan Sederhana

// class Barang
        /* Class & Method */
abstract class Barang
{
    // Property/Attribute
    // Property dulu baru Method
  private   $namaBarang, # = 'Tidak ada nama',
            $hargaBarang, # = 0,
            $stokBarang; # = 0;


    // Method/Behavior

    // method abstract> method cunstructor> method wajid> method setter getter
      // Minimal 1 method abstract
    public abstract function jenisBarang() : void;

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
  public function __construct(string $inputNama = 'Tidak ada nama', int $inputHarga = 0, int $inputStok = 0)
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
  public function tambahStok(int $jmlTambah) : void
  {
    $this->stokBarang += $jmlTambah;

    echo "Stok barang berhasil ditambah. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  }


  // public function kurangiStok() : void
  // {
  //   $this->stokBarang -= 1;

  //   echo "Stok barang berhasil dikurang. \nStok barang = {$this->stokBarang}" . PHP_EOL;
  // }
  public function kurangiStok(int $jmlKurang) : void
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
  public function cekStok(bool $status) : bool
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

  public function cetakInfoBarang() : void
  {
    echo "Nama Barang : {$this->namaBarang}\nHarga Barang : Rp. {$this->hargaBarang},00\nStok Barang : {$this->stokBarang} pcs\n";
  }

    // Method Setter; tidak mengembalikan nilai/void karena hanya mengeset data
  public function setNamaBarang(string $namaBarang) : void
  {
    $this->namaBarang = $namaBarang;
  }

  public function setHargaBarang(int $hargaBarang) : void
  {
    $this->hargaBarang = $hargaBarang;
  }

  public function setStokBarang(int $stokBarang) : void
  {
    $this->stokBarang = $stokBarang;
  }


    // Method Getter; mengembalikan nilai/return
  public function getNamaBarang() : string
  {
    return $this->namaBarang;
  }

  public function getHargaBarang() : int
  {
    return $this->hargaBarang;
  }

  public function getStokBarang() : int
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