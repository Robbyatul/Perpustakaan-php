<?php
    session_start();
    if(!isset($_session['email'])) {
        header("Location: login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

</head>
<body>
<div class="container w-75">
<h1 class="My-4">Aplikasi Perpustakaan Versi 3</h1>
    
    <a class="btn btn-primary" href="./buku.php">Lihat Daftar buku</a>
    <a class="btn btn-success" href="./staff.php">Lihat Daftar buku</a>

    <form class="mt-3" action="logout_proccess.php" method="POST">
        <button class="btn btn-danger" type="submit">LOGOUT</button>
    </form>

</body>
</html>