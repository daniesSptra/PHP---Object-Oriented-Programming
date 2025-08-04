<?php 

Class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($data){
        $this->judul = $data["judul"];
        $this->penulis = $data["penulis"];
        $this->penerbit = $data["penerbit"];
        $this->harga = $data["harga"];
    }

    public function tampilData(){
        echo "<h2>Hasil</h2>";
        echo "<p>Judul Buku: " . htmlspecialchars($this->judul) . "</p>";
        echo "<p>Penulis: " . htmlspecialchars($this->penulis) . "</p>";
        echo "<p>Penerbit: " . htmlspecialchars($this->penerbit) . "</p>";
        echo "<p>Harga: Rp " . number_format($this->harga, 0, ',', '.') . "</p>";
    }

}
$buku = null;

if (isset($_POST["submit"])) {
    $buku = new Produk($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input Data Buku</h1>
    <br><br>
    <form action="" method="POST">
        <label for="judul">Judul Buku: </label>
        <input type="text" name="judul" id="judul">
        <br><br>
        <label for="penulis">Penulis: </label>
        <input type="text" name="penulis" id="penulis">
        <br><br>
        <label for="penerbit">Penerbit: </label>
        <input type="text" name="penerbit" id="penerbit">
        <br><br>
        <label for="harga">Harga: </label>
        <input type="number" name="harga" id="harga">
        <br><br>
        <button type="submit" name="submit" style="cursor: pointer;">Simpan</button>
    </form>

    <?php if ($buku):?>
        <?php $buku->tampilData();?>
    <?php endif;?>
</body>
</html>