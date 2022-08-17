<?php

// Jualan Produk
// Pulsa
// Paket Internet

// cara buat class

class Produk {

    // membuat property
    private $provider,
            $masaAktif;
    protected $diskon = 0;
    private $harga;
           


    // membuat method

    public function setJudul( $provider2) {
        $this->provider = $provider2;
    }
    public function getJudul() {
        return $this->provider;
    }
    public function setAktif( $aktif1 ) {
        $this->masaAktif = $aktif1;
    }
    public function getAktif() {
        return $this->masaAktif;
    }
    
    

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->provider, $this->harga";
    }

    public function getInfoProduk() {
        // Pulsa : Telkomsel, 12000 | 30hr - no internet
        $str = "{$this->getLabel()} | {$this->masaAktif}";
        
        return $str;
    }


    // Constructor
    public function __construct( $provider1, $harga1, $masaAktif1) {
        $this->provider = $provider1;
        $this->harga = $harga1;
        $this->masaAktif = $masaAktif1;
        
    }

    


}



// overriding
class Pulsa extends Produk {

    public $nointernet;

    public function __construct( $provider1, $harga1, $masaAktif1, $nointernet1 = 0 ) {
        parent::__construct( $provider1, $harga1, $masaAktif1);

        $this->nointernet = $nointernet1;
    }

    public function getInfoProduk() {
        $str = "Pulsa : " . parent::getInfoProduk() . " - {$this->nointernet} Tidak dapat digunakan.";
        return $str;
    }
}

class Paket extends Produk {
    
    public $internet;
    public function __construct( $provider1, $harga1, $masaAktif1, $internet1 = 0) {
        parent::__construct(  $provider1, $harga1, $masaAktif1 );
        $this->internet = $internet1;
    }

    
    public function setDiskon( $diskon1 ) {
        $this->diskon = $diskon1;
    }

    public function getInfoProduk() {
        $str = "Paket Data : " . parent::getInfoProduk() . " - {$this->internet} dapat digunakan.";
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


$produk1 = new Pulsa("Telkomsel", 12000, "30hr", 10);

$produk2 = new Paket("Indosat", 27000, "30hr", 2);


// Pulsa : Telkomsel, 12000
// Paket Data : Indosat, 27000
// Telkomsel, 12000 | 30hr

// Pulsa : Telkomsel, 12000 | 30hr - 10Rb
//  Paket Data : Indosat, 27000 | 30HR - 27Rb


echo $produk1->getInfoProduk();

echo "<br>";

echo $produk2->getInfoProduk();

echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();

echo "<hr>";

// setter
$produk1->setAktif("Masa Aktif Berlaku selama 30hr");


// getter
echo $produk1->getAktif();



?>