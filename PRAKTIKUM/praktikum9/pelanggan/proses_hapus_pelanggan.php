<?php
include '../koneksi_db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil semua ID pesanan yang dimiliki pelanggan ini
    $stmt0 = $conn->prepare("SELECT ID FROM pesanan WHERE Pelanggan_ID = ?");
    $stmt0->bind_param("i", $id);
    $stmt0->execute();
    $result = $stmt0->get_result();

    while ($row = $result->fetch_assoc()) {
        $pesanan_id = $row['ID'];

        // Hapus detail_pesanan untuk setiap pesanan
        $stmt_del_detail = $conn->prepare("DELETE FROM detail_pesanan WHERE Pesanan_ID = ?");
        $stmt_del_detail->bind_param("i", $pesanan_id);
        $stmt_del_detail->execute();
        $stmt_del_detail->close();
    }

    $stmt0->close();

    // Setelah detail_pesanan dihapus, hapus pesanan
    $stmt1 = $conn->prepare("DELETE FROM pesanan WHERE Pelanggan_ID = ?");
    $stmt1->bind_param("i", $id);
    $stmt1->execute();
    $stmt1->close();

    // Setelah pesanan dihapus, hapus pelanggan
    $stmt2 = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt2->bind_param("i", $id);

    if ($stmt2->execute()) {
        echo "<script>alert('Pelanggan berhasil dihapus'); window.location='daftar_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus pelanggan: " . addslashes($stmt2->error) . "'); window.location='daftar_pelanggan.php';</script>";
    }

    $stmt2->close();
} else {
    echo "<script>alert('ID tidak valid'); window.location='daftar_pelanggan.php';</script>";
}

$conn->close();

?>