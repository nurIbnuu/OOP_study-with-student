<?php 

require_once 'Barang.php';

class Processor extends Barang
{
  // Property
  public  $frekuensiDasar = 0,
          $turboBoost = 0;


  // Method Construct
  public function __construct(string $namaBarang, int $hargaBarang, int $stokBarang, float $frekuensiDasar, float $turboBoost)
  {
    // echo 'ok';
    $this->namaBarang = $namaBarang;
    $this->hargaBarang = $hargaBarang;
    $this->stokBarang = $stokBarang;
    $this->frekuensiDasar = $frekuensiDasar;
    $this->turboBoost = $turboBoost;
  }

  // Method Setter & Getter
  public function setFrekuensiDasar(float $frekuensiDasar) : void
  {
    $this->frekuensiDasar = $frekuensiDasar;
  }
  public function getFrekuensiDasar() : float
  {
    return $this->frekuensiDasar;
  }

  public function setTurboBoost(float $turboBoost) : void
  {
    $this->turboBoost = $turboBoost;
  }
  public function getTurboBoost() : float
  {
    return $this->turboBoost;
  }

}