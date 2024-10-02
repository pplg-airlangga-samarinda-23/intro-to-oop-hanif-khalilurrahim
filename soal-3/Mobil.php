<?php
class Mobil {
    // lengkapi dengan atribut dan metode sesuai pada buku
    public $melaju;
    public $merek;
    public $belok;
    public $bensin;
    // contoh metode melaju() 

    public function melaju() {
        echo "Mobil sedang melaju dengan kecepatan penuh .<br>";
    }
    
    public function merek() {
        echo "Merek mobil yaitu bugatti warna hitam .<br>";
    }

    public function belok() {
        echo "Mobil sedang jamping jamping .<br>";
    }

    public function bensin() {
        echo "Bensin mobil penuh F .<br>";
    }
}

// buat sebuah objek mobil dan lengkapi atributnya
$mobilSaya = new Mobil ();

// panggil keempat metode yang terdapat pada kelas Mobil
$mobilSaya -> melaju();
$mobilSaya -> merek();
$mobilSaya -> belok();
$mobilSaya -> bensin();
?>