<?php

require_once '../class/Barang.php';
require_once '../class/Penjual.php';
require_once '../class/Pembeli.php';

  // Instansiasi objek dari class Barang
$barang1 = new Barang;
// Manipulasi property
$barang1->namaBarang = 'Shampoo';
$barang1->hargaBarang = 7_000;
$barang1->stokBarang = 100;

  // Akses property dalam object
// echo $barang1->namaBarang; # Shampoo
// echo "Apakah stok barang 1 masih tersedia? : {$barang1->cekStok()}"; # Apakah stok barang 1 masih tersedia? : 1

  // Akses method dalam object
// $barang1->tambahStok(5); # Stok barang berhasil ditambahkan. Stok barang = 105
// $barang1->kurangiStok(3); # Stok barang berhasil dikurang. Stok barang = 102
// $barang1->cetakInfoBarang(); # Nama Barang : Shampoo. Harga Barang : Rp. 7000,00. Stok Barang : 100 pcs.

$barang2 = new Barang;
$barang2->namaBarang = 'Pasta Gigi';
$barang2->hargaBarang = 11_000;
$barang2->stokBarang = 77;

// $barang2->cetakInfoBarang(); # Nama Barang : Pasta Gigi. Harga Barang : Rp. 11000,00. Stok Barang : 77 pcs.



  // Instansiasi Object Penjual
$penjual1 = new Penjual;
$penjual1->nama = 'Udin';
$penjual1->umur = 21;
$penjual1->jenisKelamin = 'Laki-laki';
$penjual1->lamaKerjaPerTahun = 2;

  // Akses method dalam object
$penjual1->cetakInfoPenjual(); # Nama Penjual : Udin. Umur Penjual : 21 tahun. Jenis Kelamin : Laki-laki. Lama Kerja. Pertahun : 2 tahun.

  // Instansiasi Object Pemebeli
$pembeli1 = new Pembeli;
$pembeli1->nama = 'Siti';
$pembeli1->umur = 19;
$pembeli1->jenisKelamin = 'Perempuan';
$pembeli1->noTelp = '085866473926';
$pembeli1->alamat= 'Kulon Progo';

  // Akses method dalam object
$pembeli1->cetakInfoPembeli(); # Nama Pembeli : Siti. Umur Pembeli : 19 tahun. Jenis Kelamin : Perempuan. Nomor Telepon : 085866473926. Alamat Pembeli : Kulon Progo.

  // Mengubah nilai property
$pembeli1->nama = 'Sholehah';

  // Akses method dalam object
$pembeli1->cetakInfoPembeli(); # Nama Pembeli : Sholehah. Umur Pembeli : 19 tahun. Jenis Kelamin : Perempuan. Nomor Telepon : 085866473926. Alamat Pembeli : Kulon Progo.