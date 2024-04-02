<?php
// Check if user is logged in
session_start();
// Data login
$username = "admin";
$pass = "1234";

// Memeriksa apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah data yang dimasukkan benar
    if ($_POST['username'] == $username && $_POST['password'] == $pass) {
        // Jika benar, set session dan redirect ke dashboard
        session_start();
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika salah, tampilkan pesan error
        echo "<script>alert('Username atau password salah. Silakan coba lagi.');</script>";
    }
}
if(!isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product</title>

  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="container">
    <h1>Welcome to Anime Website</h1>

    <br>
    <div class="row" id="konten">
        <!-- List card anime akan ditampilkan di sini -->
    </div>
  </div>
  <footer>
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Rizky Jein Nur Aulia</h4>
                <p>Full Stack Web Developer</p>
                <p>PT Arkatama Multi Solusindo</p>
                <p>Studi Independen</p>
                <p>Merdeka Belajar Kampus Merdeka</p>
            </div>
        </div>
    </div>
  </footer>

<script src="assets/js/main.js"></script>
</body>
</html>

