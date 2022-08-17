<?php

// define('NAMA', 'adi');
// echo NAMA;


// const UMUR = 22;
// echo UMUR;



// class Constanta {
//     const NAMA = 'adi';
// }

// echo Constanta::NAMA;


// MAGIC CONSTANT

// echo __DIR__;



// function coba() {
//     return __FUNCTION__;

// }

// echo coba();


class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>