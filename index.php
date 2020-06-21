<?php
session_start();
include 'config/config.php';
error_reporting(0);
if($_SESSION['user'] == NULL)$cek = "n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hayu ngobrol</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery3-4-1.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $(".box-messesage").load("tampil.php").slideDown();
            setInterval(function(){
                $(".box-messesage").load("tampil.php");
            }, 15000);
            $("#kirim").click(function(){
                const url = "proses.php";
                const data = $("#text").serialize();
                
                $.post(url, data, function(success){
                    document.getElementById('text').value = '';
                    $(".box-messesage").load("tampil.php");

                })
            });
            $("#hapus").click(function(){
                document.getElementById("text").value = '';
                $(".box-messesage").load("tampil.php");
            });
        });
    </script>
</head>
<body>
    <div class="container col-sm-12 col-md-8 mt-4 mb-4">
        <div class="card shadow  bg-dark text-light">
            <div class="card-body">
                <?php
                if($cek == "n")echo '<div class="pt-2 float-left">Kamu belum login :(</div><a href="login.php" class="btn btn-outline-primary float-right">Login</a> <a href="daftar.php" class="btn btn-outline-success float-right mr-1">Daftar</a>';
                else echo '<div class="pt-2 float-left">Hai '.$_SESSION['user'].'!</div><a href="?logout" class="btn btn-outline-primary float-right">Logout</a>';
                ?>
            </div>
        </div>
        <div class="card shadow p-3">
            <div class="card-body box-messesage p-1">
                
            </div>
            <div class="form-group mt-4">
                <input type="text" name="text" id="text" class="form-control" placeholder="Magic words kamu" required>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" id="kirim">Kirim</button>
                <button type="button" class="btn btn-danger" id="hapus">Hapus</button>
            </div>
            <span class="copyright">Copyright &copy; Zidan 2020</span>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: index.php");
}
?>