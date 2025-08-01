<!-- Constructor -->

<?php 

Class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __constract($isiJudul, $isiPenulis, $isiPenerbit, $isiHarga){
        $this->judul = $isiJudul;
        $this->penulis = $isiPenulis;
        $this->penerbit = $isiPenerbit;
        $this->harga = $isiHarga;
    }
    
    public function getLabel(){
        return "$this->judul, $this->penulis";
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
 
echo "Komik: ".$produk1->getLabel();
echo "<br>";
echo "Game: ".$produk2->getLabel();



?>