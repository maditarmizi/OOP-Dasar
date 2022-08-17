<?php

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

    
    
    public function getInfo()
    {
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



?>