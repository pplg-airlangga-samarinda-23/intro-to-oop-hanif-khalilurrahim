<?php
class Mobil {
    // lengkapi dengan atribut dan metode sesuai pada buku
    public $melaju;
    public $merek;
    public $belok;
    public $bensin;
    // contoh metode melaju()
    
    public function melaju() {
        echo "Mobil sedang melaju dengan kecepatan penuh ";
    }
    
    public function merek() {
        echo "Merek mobil yaitu bugatti warna hitam ";
    }

    public function belok() {
        echo "Mobil sedang jamping jamping ";
    }

    public function bensin() {
        echo "Bensin mobil penuh F ";
    }
}

// buat sebuah objek mobil dan lengkapi atributnya
$mobilSaya = new Mobil("Toyota", "Hitam", 80);

// panggil keempat metode yang terdapat pada kelas Mobil
$melaju -> melaju();
$merek -> merek();
$belok -> belok();
$bensin -> bensin();
echo $melaju;
echo $merek;
echo $belok;
echo $bensin;

?>