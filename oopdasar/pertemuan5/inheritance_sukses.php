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
           $internet;


    // membuat method
    public function getLabel() {
        return "$this->provider, $this->harga";
    }

    public function getInfoProduk() {
        // Pulsa : Telkomsel, 12000 | 30hr - no internet
        $str = "{$this->getLabel()} | {$this->masaAktif}";
        
        return $str;
    }



    // Constructor
    public function __construct( $provider1, $harga1, $masaAktif1, $nointernet1 = 0, $internet1 = 0) {
        $this->provider = $provider1;
        $this->harga = $harga1;
        $this->masaAktif = $masaAktif1;
        $this->nointernet = $nointernet1;
        $this->internet = $internet1;
    }


}



// inheritance sukses
class Pulsa extends Produk {
    public function getInfoProduk() {
        $str = "Pulsa : {$this->getLabel()} | {$this->masaAktif} - {$this->nointernet} Tidak dapat digunakan.";
        return $str;
    }
}

class Paket extends Produk {
    public function getInfoProduk() {
        $str = "Paket Data : {$this->getLabel()} | {$this->masaAktif} - {$this->internet} dapat digunakan.";
        return $str;
    }
}


// Object Type
class cetakInfoProduk {
    public function cetak( $produk ) {
        $str = "{$produk->getLabel()} | {$produk->masaAktif}"; 
        return $str;
    }
}


$produk1 = new Pulsa("Telkomsel", 12000, "30hr", 10, 0);

$produk2 = new Paket("Indosat", 27000, "30hr", 0, 2);


// Pulsa : Telkomsel, 12000
// Paket Data : Indosat, 27000
// Telkomsel, 12000 | 30hr

// Pulsa : Telkomsel, 12000 | 30hr - 10Rb
//  Paket Data : Indosat, 27000 | 30HR - 27Rb


echo $produk1->getInfoProduk();

echo "<br>";

echo $produk2->getInfoProduk();


?>