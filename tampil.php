<?php
include 'config/config.php';
$query = "select * from pesan";
$res = $konek->query($query);
foreach ($res as $key) {
    $id = $key['id'];
    $pengirim = htmlspecialchars($key['pengirim']);
    $isi = htmlspecialchars($key['isi']);
    $tanggal = htmlspecialchars($key['tanggal']);
    $jam = htmlspecialchars($key['jam']);

    echo "<span>".htmlspecialchars($pengirim).": ".htmlspecialchars($isi)."</span><br>";
    echo "<span>".htmlspecialchars($tanggal)." ".htmlspecialchars($jam)."</span><br><br>";
}
?>