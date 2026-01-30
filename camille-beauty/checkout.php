<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<style>
body{
  font-family:Arial;
  background:#fff3fa;
}
.box{
  width:400px;
  margin:auto;
  margin-top:40px;
  padding:20px;
  background:white;
  border-radius:10px;
}
input, select{
  width:100%;
  padding:10px;
  margin:8px 0;
  border:1px solid #ccc;
  border-radius:5px;
}
button{
  padding:10px;
  width:100%;
  background:#ff69a6;
  border:none;
  border-radius:5px;
  color:white;
}
</style>
</head>

<body>

<div class="box">
<h2>Checkout</h2>

<form method="POST" action="pembayaran.php">

<label>Nama Pembeli</label>
<input type="text" name="nama" required>

<label>Alamat</label>
<input type="text" name="alamat" required>

<label>Metode Pembayaran</label>
<select name="metode">
  <option value="COD">COD</option>
  <option value="Transfer">Transfer Bank</option>
  <option value="E-Wallet">E-Wallet</option>
</select>

<button type="submit">Bayar Sekarang</button>

</form>
</div>

</body>
</html>
