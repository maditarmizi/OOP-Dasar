<?php

class Paket extends Produk implements InfoProduk {
    
    public $internet;
    public function __construct( $provider1, $harga1, $masaAktif1, $internet1 = 0) {
        parent::__construct(  $provider1, $harga1, $masaAktif1 );
        $this->internet = $internet1;
    }

    
    public function setDiskon( $diskon1 ) {
        $this->diskon = $diskon1;
    }

    public function getInfoProduk() {
        $str = "Paket Data : " . $this->getInfo() . " - {$this->internet} dapat digunakan.";
        return $str;
    }
}


?>