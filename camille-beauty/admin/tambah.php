<form method="post" enctype="multipart/form-data">
    <input name="nama" placeholder="Nama Produk">
    <input name="harga" placeholder="Harga">
    <input type="file" name="gambar">
    <button name="simpan">Simpan</button>
</form>

<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($_FILES['gambar']['tmp_name'], "../assets/img/".$gambar);

    mysqli_query($conn, "INSERT INTO produk VALUES('', '$nama', '$harga', '$gambar')");
    header("Location: index.php");
}
?>
