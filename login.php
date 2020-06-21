<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login brow</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container col-sm-12 col-md-7 jarak-admin">
        <div class="card p-5 shadow">
            <h4>Silahkan login</h4>
            <hr>
            <form action="proses.php" method="post">
                <?php
                if(isset($_GET['err']))echo '<div class="text-center">Username atau password salah</div>';
                else echo '<br>';
                ?>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="hidden" name="login" value="masuk">
                    <input type="text" name="username" id="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="pass" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>