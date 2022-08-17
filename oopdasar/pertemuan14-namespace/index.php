<?php


require_once 'App/init.php';


// $produk1 = new Pulsa("Telkomsel", 12000, "30hr", 10);
// $produk2 = new Paket("Indosat", 27000, "30hr", 2);


// $cetakProduk = new cetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;
new ServiceUser();

echo "<br>";

new ProdukUser();



// echo "<br>";

// new App\Produk\User();





?>