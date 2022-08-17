<?php

class Pulsa extends Produk implements InfoProduk {

    public $nointernet;

    public function __construct( $provider1, $harga1, $masaAktif1, $nointernet1 = 0 ) {
        parent::__construct( $provider1, $harga1, $masaAktif1);

        $this->nointernet = $nointernet1;
    }

    public function getInfoProduk() {
        $str = "Pulsa : " . $this->getInfo() . " - {$this->nointernet} Tidak dapat digunakan.";
        return $str;
    }
}

?>