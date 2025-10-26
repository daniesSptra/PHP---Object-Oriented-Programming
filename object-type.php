<?php 

Class Produk{
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($isiJudul, $isiPenulis, $isiPenerbit, $isiHarga){
        $this->judul = $isiJudul;
        $this->penulis = $isiPenulis;
        $this->penerbit = $isiPenerbit;
        $this->harga = $isiHarga;
    }
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

Class CetakInfoProduk {
    public function cetak($produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp.{$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen jol", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
 
echo "Komik: ".$produk1->getLabel();
echo "<br>";
echo "Game: ".$produk2->getLabel();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);



?>