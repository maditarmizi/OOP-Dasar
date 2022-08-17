<?php

// Jualan Produk
// Pulsa
// Paket Internet

// cara buat class

class Produk {

    // membuat property
    public $provider,
           $harga,
           $masaAktif,
           $nointernet,
           $internet,
           $tipe;


    // membuat method
    public function getLabel() {
        return "$this->provider, $this->harga";
    }

    public function getInfoLengkap() {
        // Pulsa : Telkomsel, 12000 | 30hr - no internet
        $str = "{$this->tipe} : {$this->getLabel()} | {$this->masaAktif}";
        if( $this->tipe == "Pulsa" ) {
            $str .= " - {$this->nointernet} Tidak dapat digunakan.";
        } else if ( $this->tipe == "Paket Data") {
            $str .= " - {$this->internet} Dapat digunakan.";
        }
        return $str;
    }



    // Constructor
    public function __construct( $provider1, $harga1, $masaAktif1, $nointernet1 = 0, $internet1 = 0, $tipe1 ) {
        $this->provider = $provider1;
        $this->harga = $harga1;
        $this->masaAktif = $masaAktif1;
        $this->nointernet = $nointernet1;
        $this->internet = $internet1;
        $this->tipe = $tipe1;
    }


}

// Object Type
class cetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->getLabel()} | {$produk->masaAktif}"; 
        return $str;
    }
}


$produk1 = new Produk("Telkomsel", 12000, "30hr", 10, 0, "Pulsa");

$produk2 = new Produk("Indosat", 27000, "30hr", 0, 2, "Paket Data");


// Pulsa : Telkomsel, 12000
// Paket Data : Indosat, 27000
// Telkomsel, 12000 | 30hr

// Pulsa : Telkomsel, 12000 | 30hr - 10Rb
//  Paket Data : Indosat, 27000 | 30HR - 27Rb


echo $produk1->getInfoLengkap();

echo "<br>";

echo $produk2->getInfoLengkap();


?>