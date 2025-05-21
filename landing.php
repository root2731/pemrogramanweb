<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Input Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    if (isset($_SESSION['success'])) {
        echo "<script>alert('" . $_SESSION['success'] . "');</script>";
        unset($_SESSION['success']);
    } elseif (isset($_SESSION['error'])) {
        echo "<script>alert('" . $_SESSION['error'] . "');</script>";
        unset($_SESSION['error']);
    }
    ?>

    <div class="container">
        <h2>Selamat Datang, <?php echo $_SESSION['email']; ?></h2>
        <a href="logout.php" class="logout">Logout</a>

        <h3>Input Data Mahasiswa</h3>
        <form method="POST" action="insert.php">
            <input type="text" name="nama" placeholder="Nama Mahasiswa" required>
            <input type="text" name="nim" placeholder="NIM" required>
            <button type="submit">Simpan</button>
        </form>
    </div>

</body>

</html>