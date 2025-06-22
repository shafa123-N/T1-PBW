<?php
$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari pertama kerja";
        break;
    case "jumat":
        echo "Solat jumat";
        break;
    case "minggu":
        echo "libur akhir pekan";
        break;
    default:
    echo "hari biasa.";
}
?>