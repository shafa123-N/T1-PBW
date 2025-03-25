function cekNilai() {
    let nim = document.getElementById("nim").value;
    let nilai = parseFloat(document.getElementById("nilai").value);
    let hasil = "";

    if (!/^[0-9]{8,}$/.test(nim)) {
        hasil = "NIM harus berupa angka dan minimal 8 digit!";
    } else if (isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasil = "Nilai tidak valid!";
    } else if (nilai >= 80) {
        hasil = "Huruf Mutu: A";
    } else if (nilai >= 70) {
        hasil = "Huruf Mutu: B";
    } else if (nilai >= 60) {
        hasil = "Huruf Mutu: C";
    } else if (nilai >= 50) {
        hasil = "Huruf Mutu: D";
    } else {
        hasil = "Huruf Mutu: E";
    }
    
    document.getElementById("hasil").innerText = hasil;
}