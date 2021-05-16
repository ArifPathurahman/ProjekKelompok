<?php
ob_start();
session_start();
require 'koneksi1.php';
// membuat variabel nama dan harga yang nilai diambil dari form tambah
$nim = $_POST['idnim'];
$nama = $_POST['idnama'];
$email = $_POST['idemail'];
$pw = $_POST['idpw'];
// Pengkondisian untuk mengecek variabel harga dan nama memiliki value atau tidak
if($nim=="" and $nama=="" and $email=="" and $pw==""){
    echo "Data Belum Diisi ";
}elseif($nim==""){
    // Pengkondisian untuk mengecek variabel nama memiliki value atau tidak
    echo "Nim belum diisi";
}elseif($nama==""){
    // Pengkondisian untuk mengecek variabel harga memiliki value atau tidak
    echo "Nama belum diisi";
}elseif($email==""){
    // Pengkondisian untuk mengecek variabel nama memiliki value atau tidak
    echo "Email belum diisi";
}elseif($pw==""){
    // Pengkondisian untuk mengecek variabel nama memiliki value atau tidak
    echo "Password belum diisi";
}
else{
    // jika kedua variabel tadi sudah terisi maka akan menjalankan code dibawah untuk merecord data yang sudah dinputkan
    $sql = "INSERT into tbkelompok(nim,nama,email,pw)VALUES('$nim','$nama','$email','$pw')";
    $result = $koneksi->query($sql);
    header("Location: index.php");
}
?>
