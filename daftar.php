<?php
include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container col-sm-12 col-md-7 jarak-admin">
        <div class="card p-5 shadow">
            <h4>Daftar akun</h4>
            <hr>
            <form action="proses.php" method="post">
                <br>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="daftar" value="daftar">
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="pass" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-danger">Let's Goo!</button>
            </form>
        </div>
    </div>
</body>
</html>