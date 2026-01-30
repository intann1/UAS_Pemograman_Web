<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<style>
    body{ font-family:Arial; background:#fff3fa; }
    .box{ width:400px; margin:auto; padding:20px; background:white; border-radius:10px; margin-top:40px; }
    input,select{ width:100%; padding:10px; margin:5px 0; border:1px solid #ccc; border-radius:5px; }
    button{ padding:10px; width:100%; background:#ff69a6; border:none; border-radius:5px; color:white; }
</style>
</head>
<body>

<div class="box">
<h2>Checkout</h2>
<form>
    <label>Nama Pembeli</label>
    <input type="text" required>

    <label>Alamat</label>
    <input type="text" required>

    <label>Metode Pembayaran</label>
    <select>
        <option>COD</option>
        <option>Transfer Bank</option>
        <option>E-Wallet</option>
    </select>

    <button>Bayar Sekarang</button>
</form>
</div>

</body>
</html>
