<?php
session_start();
include 'db.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

$query = "INSERT INTO mahasiswa (nama, nim) VALUES ('$nama', '$nim')";
$result = mysqli_query($conn, $query);

if ($result) {
    $_SESSION['success'] = "Data berhasil disimpan!";
} else {
    $_SESSION['error'] = "Gagal menyimpan data.";
}

header("Location: landing.php");
exit;
