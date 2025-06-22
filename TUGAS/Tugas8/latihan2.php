<form method = "post" action= "">
    NPM: <input type="number" name="npm"><br>
    Nama: <input type="text" name="nama"><br>
    Prodi: <input type="text" name="prodi"><br>
    Semester: <input type="number" name="semester"><br>
    Biaya UKT: <input type="number" name="ukt"><br>
    <input type = "submit" value="KIRIM">
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $npm = $_POST['npm'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $semester = $_POST['semester'];
        $ukt = $_POST['ukt'];
        $diskon = 0 ;
    
    if ($ukt >= 5000000 && $semester <= 8){
        $diskon = 0.10;
    }elseif ($ukt >= 5000000 && $semester > 8){
        $diskon = 0.15;
    }else{
        $diskon = 0;
    }

    $potongan = ($diskon * $ukt);
    $bayar = $ukt - $potongan;

    if ($diskon == 15) {
        $status = "Diskon 15% (UKT >= 5jt dan semester > 8)";
    } elseif ($diskon == 10) {
        $status = "Diskon 10% (UKT >= 5jt)";
    } else {
        $status = "Tidak dapat diskon";
    }

        echo "<h3>HASIL :</h3>";
        echo "NPM : " . htmlspecialchars($npm) . "<br>";
        echo "NAMA : " . htmlspecialchars($nama) . "<br>";
        echo "PRODI : " . htmlspecialchars($prodi) . "<br>";
        echo "SEMESTER : " . htmlspecialchars($semester) . "<br>";
        echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . "<br>";
        echo "DISKON : " . $diskon * 100 . "%<br>";
        echo "YANG HARUS DIBAYAR : Rp. " . number_format($bayar, 0, ',','.');
}
?>