<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Pulsa.php';
// require_once 'Produk/Paket.php';
// require_once 'Produk/CetakInfoProduk.php';


spl_autoload_register(function( $class ) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});



?>