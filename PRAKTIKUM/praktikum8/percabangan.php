<?php
$nilai = 75;
if ($nilai >= 80) {
   echo "Nilai A ";
} elseif ($nilai >= 70) {
   echo "Nilai B ";
} else {
   echo "Nilai C ";
}

$umur = 20;
$ktp = true;
if ($umur >= 17 && $ktp) {
   echo "Boleh memilih, ";
}

if (!empty($_POST['nama'])) {
 echo "Nama: " . htmlspecialchars($_POST['nama']);
} else {
 echo "Nama tidak boleh kosong! ";
}
?>