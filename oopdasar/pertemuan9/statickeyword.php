<?php 

// class StaticKeyword {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo " . self::$angka . " kali.";
//     }
// }

// echo StaticKeyword::$angka;
// echo "<br>";
// echo StaticKeyword::halo();


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " Kali.";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();


$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
?>