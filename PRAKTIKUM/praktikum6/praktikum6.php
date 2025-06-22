<?php

echo "Halo, selamat datang di dunia PHP";

$nama = "budi";
$umur = 20;

echo "Nama: ".$nama."  <br>";
echo "Umur: ".$umur."tahun <br>";

define("NAMA_KONSTANTA", "nilai");

define("SITE_NAME", "unsika.ac.id");
define("VERSION", "1.0");

echo "Selamat datang di ".SITE_NAME. "<br>";
echo "Versi Sistem: ". VERSION. "<br>";

$nama = " Andi ";
echo "Nama saya adalah " . $nama;

$umur = 25;
echo "umur saya ". $umur . " tahun, ";

$berat = 55.5;
echo "berat badan saya  " . $berat . " kg, ";

$isLogin = true;

$buah = ["apel ", "jeruk ", "mangga "];
echo $buah[1];

class Mahasiswa {
    public $nama;
    public function sapa() {
        return " Halo, saya $this->nama";
    }
}

$mhs = new Mahasiswa();
$mhs->nama = "Jeni";
echo $mhs->sapa();

$data = null;
var_dump($data);
?>