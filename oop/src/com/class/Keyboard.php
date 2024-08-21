<?php

require_once 'Barang.php';

class Keyboard extends Barang
{
  // Property
  public  $backlight = 'Tidak ada backlight',
          $banyakKeys = 0,
          $tipeSwitch = 'Tidak ada switch';

  // Method Construct
  public function __construct(string $namaBarang, int $hargaBarang, int $stokBarang, string $backlight, int $banyakKeys, string $tipeSwitch)
  {
    // echo 'oke';
    $this->namaBarang = $namaBarang;
    $this->hargaBarang = $hargaBarang;
    $this->stokBarang = $stokBarang;
    $this->backlight = $backlight;
    $this->banyakKeys = $banyakKeys;
    $this->tipeSwitch = $tipeSwitch;
  }

  // Method Setter & Getter
  public function setBacklight(string $backlight) : void
  {
    $this->backlight = $backlight;
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


}