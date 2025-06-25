<?php
// Include file koneksi ke database
include 'db.php';

// Ambil data dari form
$nama  = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

// Simpan ke database
$query = "INSERT INTO messages (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($conn, $query)) {
    // Redirect kembali ke halaman kontak dengan notifikasi
    header("Location: ../contact.php?status=success");
    exit();
} else {
    echo "Gagal menyimpan pesan: " . mysqli_error($conn);
}
?>
