<?php 

$IsiJudul=$IsiPenulis=$IsiPenerbit='';
$IsiHarga=0;

if (isset($_POST["submit"])) {
    
    $IsiJudul = $_POST["judul"];
    $IsiPenulis = $_POST["penulis"];
    $IsiPenerbit = $_POST["penerbit"];
    $IsiHarga = $_POST["harga"];
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

    <h2>Hasil</h2>
    <p>Judul Buku: <?php echo $IsiJudul; ?></p>
</body>
</html>