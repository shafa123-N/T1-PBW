<?php
$jumlah_roda = 3;

switch ($jumlah_roda){
    case "2":
        echo "motor";
        break;
    case "3":
        echo "bajaj";
        break;
    case "4":
        echo "mobil";
        break;
    case "6":
        echo "bus";
        break;
    case "10":
        echo "truk tronton";
        break;
    default:
        echo "kendaraan tidak diketahui";
}
?>
