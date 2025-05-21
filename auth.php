<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email;
    header("Location: landing.php");
} else {
    $_SESSION['error'] = "Email atau password salah!";
    header("Location: login.php");
}
exit;
