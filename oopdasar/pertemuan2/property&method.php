<?php

// Jualan Produk
// Pulsa
// Paket Internet

// cara buat class

class Produk {

    // membuat property
    public $provider = "provider",
           $harga = "harga",
           $masaAktif = "masa";


    // membuat method
    public function getLabel() {
        return "$this->provider, $this->harga";
    }
}

// cara membuat Object
// $produk1 = new Produk();
// $produk1->provider = "Telkomsel";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->provider = "XL";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);


$produk3 = new Produk();
$produk3->provider = "Telkomsel";
$produk3->harga = "12000";
$produk3->masaAktif = "30hr";

echo "Pulsa : $produk3->provider, $produk3->harga, $produk3->masaAktif";
echo "<br>";


$produk4 = new Produk();
$produk4->provider =  "Indosat";
$produk4->harga = "27000";
$produk4->masaAktif = "60hr";


// memanggil method
echo "Pulsa : " . $produk3->getLabel();
echo "<br>";
echo "Paket Data : " . $produk4->getLabel();




?>