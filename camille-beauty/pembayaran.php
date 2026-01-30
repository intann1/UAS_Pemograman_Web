<?php
session_start();

$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$metode = $_POST['metode'];
$total  = $_POST['total'];
?>

<h2>Pembayaran</h2>

<p>Nama: <?= $nama ?></p>
<p>Alamat: <?= $alamat ?></p>
<p>Total Bayar: <b>Rp <?= number_format($total) ?></b></p>

<?php if($metode == "Transfer"): ?>
    <h3>Scan QR untuk Transfer</h3>
    <img src="qris.jpeg" width="200">
<?php elseif($metode == "E-Wallet"): ?>
    <h3>Scan QR E-Wallet</h3>
    <img src="qris.jpeg" width="200">
<?php else: ?>
    <p>Silakan bayar di tempat (COD)</p>
<?php endif; ?>
