<!-- Class, Objek, Property dan Produk -->

<?php 

Class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "GTA V";
// $produk2->deskripsi = "Game paling seru era 2000an"; //tambah property yang belum di definisikan
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;


$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;
 
echo "Komik: ".$produk3->getLabel();
echo "<br>";
echo "Game: ".$produk4->getLabel();



?>