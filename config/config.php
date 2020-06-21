<?php
$host = "localhost";
$user = "pang";
$pass = "awikwok";
$data = "chat";

$konek = mysqli_connect($host, $user, $pass);
if($konek){
    $db = mysqli_select_db($konek, $data);
}else{
    echo "<h1>Something wrong</h1>";
    exit;
}
?>