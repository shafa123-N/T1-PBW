<?php
define("PAJAK", 0.10); // konstanta pajak

$harga_barang = [10000, 5000, 3000, 7000, 4000, 8000, 6000, 150000];
$nama_barang = ["Buku", "Pensil", "Penghapus", "Pulpen", "Penggaris", "Spidol", "Tip-Ex", "Keyboard"];

$index = $_POST['barang'];
$jumlah = $_POST['jumlah'];

$harga_satuan = $harga_barang[$index];
$total_sebelum_pajak = $harga_satuan * $jumlah;
$total_pajak = $total_sebelum_pajak * PAJAK;
$total_akhir = $total_sebelum_pajak + $total_pajak;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #1e1e2f;
            color: #ffffff;
            display: flex;
            justify-content: center;
            padding-top: 80px;
        }
        .box {
            background: #2e2e3e;
            border: 1px solid #aaa;
            padding: 25px;
            width: 400px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
        }
        h2 {
            text-align: center;
            margin-bottom: 10px;
        }
        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin-bottom: 15px;
        }
        .bold {
            font-weight: bold;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #00aaff;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        .btn:hover {
            background-color: #0077aa;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Perhitungan Total Pembelian (Dengan Array)</h2>
        <hr>
        <p>Nama Barang: <?php echo $nama_barang[$index]; ?></p>
        <p>Harga Satuan: Rp <?php echo number_format($harga_satuan, 0, ',', '.'); ?></p>
        <p>Jumlah Beli: <?php echo $jumlah; ?></p>
        <p>Total Harga (Sebelum Pajak): Rp <?php echo number_format($total_sebelum_pajak, 0, ',', '.'); ?></p>
        <p>Pajak (10%): Rp <?php echo number_format($total_pajak, 0, ',', '.'); ?></p>
        <p class="bold">Total Bayar: Rp <?php echo number_format($total_akhir, 0, ',', '.'); ?></p>

        <a href="T5 PBW_Najwa Shafa Azahra_4F_2310631170036.html" class="btn">← Kembali</a>
    </div>
</body>
</html>
