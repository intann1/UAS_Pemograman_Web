<?php
session_start();
include "koneksi.php";

// tambah barang
if(isset($_GET['add'])){
    $id = $_GET['add'];
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    header("Location: cart.php");
}

// kurang barang
if(isset($_GET['min'])){
    $id = $_GET['min'];
    if($_SESSION['cart'][$id] > 1)
        $_SESSION['cart'][$id]--;
    else
        unset($_SESSION['cart'][$id]);
}

// hapus barang
if(isset($_GET['del'])){
    unset($_SESSION['cart'][$_GET['del']]);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Keranjang Belanja</title>
<style>
body {
    font-family: Arial, sans-serif;
    background: #fff3fa;
}

.cart-box {
    width: 85%;
    margin: 40px auto;
    background: white;
    padding: 25px;
    border-radius: 10px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: #fff3fa;
    padding: 12px;
}

td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

.qty-btn {
    padding: 4px 10px;
    background: #fff3fa;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

.del-btn {
    color: red;
    text-decoration: none;
}

.total {
    text-align: right;
    font-size: 18px;
    font-weight: bold;
    margin-top: 15px;
}

.action-btn {
    display: inline-block;
    margin: 15px 10px 0;
    padding: 10px 25px;
    background: #ff69a6;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="cart-box">
<h2>Keranjang Belanja</h2>

<table>
<tr>
  <th>Produk</th>
  <th>Qty</th>
  <th>Harga</th>
  <th>Total</th>
  <th>Aksi</th>
</tr>

<?php
$totalAll = 0;

if(!empty($_SESSION['cart'])){
foreach($_SESSION['cart'] as $id => $qty){

    $q = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");
    $p = mysqli_fetch_assoc($q);

    $total = $p['harga'] * $qty;
    $totalAll += $total;
?>
<tr>
  <td><?= $p['nama_produk'] ?></td>
  <td>
    <a href="?min=<?= $id ?>" class="qty-btn">−</a>
    <?= $qty ?>
    <a href="?add=<?= $id ?>" class="qty-btn">+</a>
  </td>
  <td>Rp <?= number_format($p['harga'],0,',','.') ?></td>
  <td>Rp <?= number_format($total,0,',','.') ?></td>
  <td><a href="?del=<?= $id ?>" class="del-btn">Hapus</a></td>
</tr>
<?php }} ?>

</table>

<div class="total">
Total Bayar: Rp <?= number_format($totalAll,0,',','.') ?>
</div>

<center>
<a href="index.html" class="action-btn">Lanjut Belanja</a>
<a href="checkout.php" class="action-btn">Checkout</a>
</center>

</div>

</body>
</html>