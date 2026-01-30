<?php
include '../koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<a href="tambah.php">Tambah Produk</a>

<?php while ($p = mysqli_fetch_assoc($data)) { ?>
    <p>
        <?= $p['nama_produk']; ?> |
        Rp <?= number_format($p['harga']); ?>
        <a href="edit.php?id=<?= $p['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $p['id']; ?>">Hapus</a>
    </p>
<?php } ?>
