<?php

require_once 'Barang.php';

class Keyboard extends Barang
{
  // Property
  private   $backlight = 'Tidak ada backlight',
            $banyakKeys = 0,
            $tipeSwitch = 'Tidak ada switch';

  // implementasi method abstract
  public function jenisBarang(): void
  {
    echo "Ini Keyboard\n";
  }

  // Method Construct
  public function __construct(string $namaBarang, int $hargaBarang, int $stokBarang, string $backlight, int $banyakKeys, string $tipeSwitch)
  {
    // echo 'oke';

    // Override
    parent::__construct($namaBarang, $hargaBarang, $stokBarang);

    $this->backlight = $backlight;
    $this->banyakKeys = $banyakKeys;
    $this->tipeSwitch = $tipeSwitch;
  }

  // Method Setter & Getter

  // public function Set($namaBarang)
  // {
  //   $this->namaBarang = $namaBarang;
  // }
  public function setBacklight(string $backlight) : void
  {
    $this->backlight = $backlight;
      // public juga bisa diakses dari class turunannya
    // $this->namaBarang = 'Teh';
    // $this->tambahStok();
  }
  public function getBacklight() : string
  {
    return $this->backlight;
  }

  public function setBanyakKeys(int $banyakKeys) : void
  {
    $this->banyakKeys = $banyakKeys;
  }
  public function getBanyakKeys() : int
  {
    return $this->banyakKeys;
  }

  public function setTipeSwitch(string $tipeSwitch) : void
  {
    $this->tipeSwitch = $tipeSwitch;
  }
  public function getTipeSwitch() : string
  {
    return $this->tipeSwitch;
  }



  // Method Overriding
  public function cetakInfoBarang(): void
  {
    echo parent::cetakInfoBarang() . "Backlight : {$this->backlight}\nBanyak Keys : {$this->banyakKeys}\nTipe Switch : {$this->tipeSwitch}\n\n";
  }


}