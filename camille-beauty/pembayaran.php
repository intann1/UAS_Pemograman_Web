<?php
$metode = $_GET['metode'];
?>

<h2>Silakan Bayar</h2>

<?php if($metode == 'Transfer'){ ?>
    <img src="qris.jpeg" width="250">
<?php } elseif($metode == 'E-Wallet'){ ?>
    <img src="qris.jpeg" width="250">
<?php } else { ?>
    <p>Bayar di tempat (COD)</p>
<?php } ?>

<p>Setelah bayar, pesanan akan diproses.</p>