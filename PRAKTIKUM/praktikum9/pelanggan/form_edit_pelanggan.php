<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
include '../koneksi_db.php';

// Ambil data pelanggan berdasarkan ID dari parameter GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $pelanggan = $result->fetch_assoc();
    } else {
        echo "<script>alert('Data pelanggan tidak ditemukan'); window.location='daftar_pelanggan.php';</script>";
        exit;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('ID pelanggan tidak diberikan'); window.location='daftar_pelanggan.php';</script>";
    exit;
}
?>

<?php include '../nav.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Edit Pelanggan</title>
</head>
<body>
   <div class="container mt-4">
       <h2>Edit Data Pelanggan</h2>
       <form method="post" action="proses_edit_pelanggan.php">
           <input type="hidden" name="id" value="<?php echo htmlspecialchars($pelanggan['ID'] ?? ''); ?>">
           
           <div class="mb-3">
               <label for="nama" class="form-label">Nama</label>
               <input type="text" class="form-control" id="nama" name="nama" value="<?php echo htmlspecialchars($pelanggan['Nama'] ?? ''); ?>" required>
           </div>

           <div class="mb-3">
               <label for="alamat" class="form-label">Alamat</label>
               <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo htmlspecialchars($pelanggan['Alamat'] ?? ''); ?>" required>
           </div>

           <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($pelanggan['Email'] ?? ''); ?>" required>
           </div>

           <div class="mb-3">
               <label for="telepon" class="form-label">Telepon</label>
               <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo htmlspecialchars($pelanggan['Telepon'] ?? ''); ?>" required>
           </div>

           <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
       </form>
   </div>
</body>
</html>