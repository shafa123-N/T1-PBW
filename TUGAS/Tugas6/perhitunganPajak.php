<?php
$barang = array(
    "nama" => "keyboard",
    "harga_satuan" => 150000,
    "jumlah_beli" => 2
);

$total_sebelum_pajak = $barang["harga_satuan"] * $barang["jumlah_beli"];
$pajak = $total_sebelum_pajak * 0.10;
$total_bayar = $total_sebelum_pajak + $pajak;

function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
        }

        .box {
            background: white;
            border: 1px solid #000;
            padding: 20px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h3 {
            margin-top: 0;
        }

        hr {
            border: 1px solid #000;
        }

        .bold {
            font-weight: bold;
        }

        .total {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3 class="bold"> Perhitungan Total Pembelian </h3>
        <hr>
        <?php
        echo "Nama Barang: " . $barang["nama"] . "<br>";
        echo "Harga Satuan: " . formatRupiah($barang["harga_satuan"]) . "<br>";
        echo "Jumlah Beli: " . $barang["jumlah_beli"] . "<br>";
        echo "Total Harga (Sebelum Pajak): " . formatRupiah($total_sebelum_pajak) . "<br>";
        echo "Pajak (10%): " . formatRupiah($pajak) . "<br>";
        echo "<span class='total'>Total Bayar: " . formatRupiah($total_bayar) . "</span>";
        ?>
    </div>
</body>
</html>