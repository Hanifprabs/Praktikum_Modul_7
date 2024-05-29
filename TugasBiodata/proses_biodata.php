<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nama = htmlspecialchars($_GET['nama']);
    $tempat = htmlspecialchars($_GET['tempat']);
    $tgl = htmlspecialchars($_GET['tgl']);
    $bln = htmlspecialchars($_GET['bln']);
    $thn = htmlspecialchars($_GET['thn']);
    $alamat = htmlspecialchars($_GET['alamat']);
    $telp = htmlspecialchars($_GET['telp']);
    $jkl = htmlspecialchars($_GET['jkl']);
    $agama = htmlspecialchars($_GET['agama']);
    $hoby = isset($_GET['hoby']) ? $_GET['hoby'] : [];

    echo "<h2>Biodata yang Anda Masukkan:</h2>";
    echo "<p>Nama Lengkap: $nama</p>";
    echo "<p>Tempat, Tanggal Lahir: $tempat, $tgl/$bln/$thn</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>No. Telp/HP: $telp</p>";
    echo "<p>Jenis Kelamin: $jkl</p>";
    echo "<p>Agama: $agama</p>";
    echo "<p>Hoby: " . implode(", ", $hoby) . "</p>";
}
?>
