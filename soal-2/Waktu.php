<?php
class Waktu
{
    // deklarasikan atribut sesuai ditentukan buku
    public $jam;
    public $menit;
    public $detik;
    // deklarasikan metode sesuai yang diminta buku
}

$contoh = new Waktu(15,34,50);
$contoh -> jam = 15;
$contoh -> menit = 34;
$contoh -> detik = 50;
echo "Sekarang pukul ".$contoh->jam.":".$contoh->menit.":".$contoh->detik."<br>"; //output: Sekarang pukul 15:34:50
?>