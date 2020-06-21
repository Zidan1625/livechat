<?php
session_start();
include 'config/config.php';
if(isset($_POST['text'])){
    $pengirim = mysqli_real_escape_string($konek, $_SESSION['user']);
    if($pengirim == NULL)$pengirim = mysqli_real_escape_string($konek, "Anonym");
    $tanggal = date("d-m-Y");
    $jam = date("H.m");
    $data = mysqli_real_escape_string($konek, $_POST['text']);
    $query = 'insert into pesan(pengirim, isi, tanggal, jam) value ("'.$pengirim.'", "'.$data.'", "'.$tanggal.'", "'.$jam.'")';
    $konek->query($query);
}elseif(isset($_POST['login'])){
    $user = mysqli_real_escape_string($konek, $_POST['username']);
    $pass = md5($_POST['password']);
    $query = 'select * from users where username="'.$user.'" and password="'.$pass.'"';
    $res = $konek->query($query);
    $row = $res->num_rows;
    if($row > 0){
        $q = $konek->query('select * from users where username="'.$user.'"');
        foreach ($q as $s) {
            $id = $s['id'];
            $nama = $s['nama'];
        }
        $_SESSION['user'] = $nama;
        header("Location: index.php");
    }else{
        header("Location: login.php?err");
    }
}elseif(isset($_POST['daftar'])){
    $nama = mysqli_real_escape_string($konek, $_POST['nama']);
    $user = mysqli_real_escape_string($konek, $_POST['username']);
    $pass = md5($_POST['password']);
    $query = 'insert into users(nama, username, password) value ("'.$nama.'", "'.$user.'", "'.$pass.'")';
    $konek->query($query);
    header("Location: login.php");
}else{
    header("Location: index.php");
}
?>