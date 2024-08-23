<?php

require_once '../class/Barang.php';
require_once '../class/Penjual.php';
require_once '../class/Pembeli.php';
require_once '../class/Keyboard.php';
require_once '../class/Processor.php';

  // Mengakses property yang di dalam class
    # $this->namaProperty
  // Akses property dalam object
    # echo $barang1->namaBarang; # Shampoo
    # namaObject->namaProperty


  // Instansiasi objek dari class Barang
        /* Constructor & Destructor */
// $barang1 = new Barang('Shampoo', 7_000, 100);
// // $barang1->cetakInfoBarang();


        /* Property & Method */ 
//   // Manipulasi property
// // $barang1->namaBarang = 'Shampoo';
// // $barang1->hargaBarang = 7_000;
// // $barang1->stokBarang = 100;

        /* Setter & Getter */
//   // Mengakses Method Setter
// $barang1->setNamaBarang('Motherboard');
// $barang1->setHargaBarang(550_000);
// $barang1->setStokBarang(77);
  // Mengakses Method Getter
// echo $barang1->getNamaBarang() . PHP_EOL; # Motherboard
// echo $barang1->getHargaBarang() . PHP_EOL; # 550000
// echo $barang1->getStokBarang() . PHP_EOL; # 77

// $barang1->cetakInfoBarang(); # Nama Barang : Motherboard. Harga Barang : Rp. 550000,00. Stok Barang : 77 pcs

  // Akses method dalam object
// echo "Apakah stok barang 1 masih tersedia? : {$barang1->cekStok()}"; # Apakah stok barang 1 masih tersedia? : 1/true
// $barang1->tambahStok(5); # Stok barang berhasil ditambahkan. Stok barang = 105
// $barang1->kurangiStok(3); # Stok barang berhasil dikurang. Stok barang = 102
// $barang1->cetakInfoBarang(); # Nama Barang : Shampoo. Harga Barang : Rp. 7000,00. Stok Barang : 100 pcs.

// $barang2 = new Barang('Pasta Gigi', 11_000, 73);
// $barang2->cetakInfoBarang();
// $barang2->namaBarang = 'Pasta Gigi';
// $barang2->hargaBarang = 11_000;
// $barang2->stokBarang = 77;

// $barang2->cetakInfoBarang(); # Nama Barang : Pasta Gigi. Harga Barang : Rp. 11000,00. Stok Barang : 77 pcs.



  // Instansiasi Object Penjual
// $penjual1 = new Penjual('Udin', 21, 'Laki-laki', 2);
// $penjual1->cetakInfoPenjual();
// $penjual1->nama = 'Udin';
// $penjual1->umur = 21;
// $penjual1->jenisKelamin = 'Laki-laki';
// $penjual1->lamaKerjaPerTahun = 2;

  // Mengakses Method Setter
// $penjual1->setNama('Dina');
// $penjual1->setUmur(23);
// $penjual1->setJenisKelamin('Perempuan');
// $penjual1->setLamaKerjaPerTahun(10);
//   // Mengakses Method Getter
// echo $penjual1->getNama() . PHP_EOL; # Dina
// echo $penjual1->getUmur() . PHP_EOL; # 23
// echo $penjual1->getJenisKelamin() . PHP_EOL; # Perempuan
// echo $penjual1->getLamaKerjaPerTahun() . PHP_EOL; # 10

// $penjual1->cetakInfoPenjual(); # Nama Penjual : Dina. Umur Penjual : 23 tahun. Jenis Kelamin : Perempuan. Lama Kerja Pertahun : 10 tahun.


//   // Akses method dalam object
// // $penjual1->cetakInfoPenjual(); # Nama Penjual : Udin. Umur Penjual : 21 tahun. Jenis Kelamin : Laki-laki. Lama Kerja. Pertahun : 2 tahun.

//   // Instansiasi Object Pemebeli
// $pembeli1 = new Pembeli('Siti', 19, 'Perempuan', '085 866 473 946', 'Kulon Progo');
// $pembeli1->cetakInfoPembeli();
// $pembeli1->nama = 'Siti';
// $pembeli1->umur = 19;
// $pembeli1->jenisKelamin = 'Perempuan';
// $pembeli1->noTelp = '085866473926';
// $pembeli1->alamat= 'Kulon Progo';

  // Mengakses Method Setter
// $pembeli1->setNama('Budi');
// $pembeli1->setUmur(22);
// $pembeli1->setJenisKelamin('Laki-laki');
// $pembeli1->setNoTelp('085 123 456 789');
// $pembeli1->setAlamat('Bedugul');

//   // Mengakses Method Getter
// echo $pembeli1->getNama() . PHP_EOL; # Budi
// echo $pembeli1->getUmur() . PHP_EOL; # Laki-laki
// echo $pembeli1->getJenisKelamin() . PHP_EOL; # Laki-laki
// echo $pembeli1->getNoTelp() . PHP_EOL; # 085 123 456 789
// echo $pembeli1->getAlamat() . PHP_EOL; # Bedugul

// $pembeli1->cetakInfoPembeli(); # Nama Pembeli : Budi. Umur Pembeli : 22 tahun. Jenis Kelamin : Laki-laki. Nomor Telepon : 085 123 456 789. Alamat Pembeli : Bedugul.

  // Akses method dalam object
// $pembeli1->cetakInfoPembeli(); # Nama Pembeli : Siti. Umur Pembeli : 19 tahun. Jenis Kelamin : Perempuan. Nomor Telepon : 085866473926. Alamat Pembeli : Kulon Progo.

  // Mengubah nilai property
// $pembeli1->nama = 'Sholehah';

  // Akses method dalam object
// $pembeli1->cetakInfoPembeli(); # Nama Pembeli : Sholehah. Umur Pembeli : 19 tahun. Jenis Kelamin : Perempuan. Nomor Telepon : 085866473926. Alamat Pembeli : Kulon Progo.


// $barang3 = new Barang;
// $barang3->cetakInfoBarang(); # Nama Barang : Tidak ada nama. Harga Barang : Rp. 0,00. Stok Barang : 0 pcs = pakai nilai default
// echo $barang3->namaBarang; # Tidak ada nama = nilai default
// echo $barang3->hargaBarang; # 0 = nilai default
// echo $barang3->stokBarang; # 0 = nilai default



      /* Inheritance */
      /* Overriding & Overloading */
$key1 = new Keyboard('Vortex Seies VX7', 1_000_000, 97, 'RGB', 87, 'Outemu Blue');
$key2 = new Keyboard('Keychron K2', 1_200_000, 27, 'RGB', 84, 'Gateron Brown');
$key3 = new Keyboard('Rexus Daxa M84 Pro', 1_500_000, 11, 'RGB', 97, 'Gateron Red');
// $key1->cetakInfoBarang(); # Nama Barang : Vortex Seies VX7. Harga Barang : Rp. 1000000,00. Stok Barang : 97 pcs.
// $key2->cetakInfoBarang(); # Nama Barang : Keychron K2. Harga Barang : Rp. 1200000,00. Stok Barang : 27 pcs.
// $key3->cetakInfoBarang(); # Nama Barang : Rexus Daxa M84 Pro. Harga Barang : Rp. 1500000,00. Stok Barang : 11 pcs.

$proc1 = new Processor('AMD Ryzen 5 3600', 3_000_000, 24, 3.6, 4.2);
$proc2 = new Processor('Intel Core i5 10400', 2_400_000, 15, 2.9, 4.3);
// $proc1->cetakInfoBarang(); # Nama Barang : AMD Ryzen 5 3600. Harga Barang : Rp. 3000000,00. Stok Barang : 24 pcs.
// $proc2->cetakInfoBarang(); # Nama Barang : Intel Core i5 10400. Harga Barang : Rp. 2400000,00. Stok Barang : 15 pcs.





      /* Acces Modifier/Encapsulation/Visibility */
// $brg1 = new Barang('Kopi', 12_000, 22);
// Bisa diakses dari luar (public)
// $brg1->hargaBarang = 1_200;
// $brg1->tambahStok(2);
// echo $brg1->hargaBarang;


// Semua Property harus private; agar 1. aman, 2. Setter & Getter berguna
// $key1->namaBarang = 'Kopi'; // tidak bisa karena sudah private
// $key1->setNamaBarang('Kopi'); // bisa, nah sekarang Setter jadi lebih berguna

// Jika kelas Barang(induk) tidak akan diinstansiasi maka jadikan 'protected'
// $key1->Set('Kopi');





      /* Abstraksi */
// $brg = new Barang();
// $key1->setNamaBarang('aaa');
// Barang tidak boleh diinstansiasi hanya untuk template
// $t = new Barang(); Cannot instantiate abstract class Barang
$key1->jenisBarang();
$proc1->jenisBarang();