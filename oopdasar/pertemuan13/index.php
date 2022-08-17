<?php


require_once 'App/init.php';


$produk1 = new Pulsa("Telkomsel", 12000, "30hr", 10);
$produk2 = new Paket("Indosat", 27000, "30hr", 2);


$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();




?>