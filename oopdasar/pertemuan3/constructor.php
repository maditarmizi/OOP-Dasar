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

    // Constructor
    public function __construct( $provider1, $harga1, $masaAktif1 ) {
        $this->provider = $provider1;
        $this->harga = $harga1;
        $this->masaAktif = $masaAktif1;
    }


}


$produk1 = new Produk("Telkomsel", 12000, "30hr");

$produk2 = new Produk("Indosat", 27000, "30hr");

// memanggil method
echo "Pulsa : " . $produk1->getLabel();
echo "<br>";
echo "Paket Data : " . $produk2->getLabel();


?>