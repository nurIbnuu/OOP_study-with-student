<?php 

require_once 'Barang.php';

class Processor extends Barang
{
  // Property
  private   $frekuensiDasar = 0,
            $turboBoost = 0;

  
  // implementasi method abstract
  public function jenisBarang(): void
  {
    echo "Ini Processor\n";
  }


  // Method Construct
  public function __construct(string $namaBarang, int $hargaBarang, int $stokBarang, float $frekuensiDasar, float $turboBoost)
  {
    // echo 'ok';

    // Override; menghindari duplikasi kode
    parent::__construct($namaBarang, $hargaBarang, $stokBarang);

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


    // Method Overriding
    public function cetakInfoBarang(): void
    {
      echo parent::cetakInfoBarang() . "Frekuensi Dasar : {$this->frekuensiDasar}\nTurbo Boost : {$this->turboBoost}\n\n";
    }

}