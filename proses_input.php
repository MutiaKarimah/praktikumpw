<?php
include "config.php";
$idgame = $_POST['idgame'];
$namagame = $_POST['namagame'];
$tglrilis = $_POST['tglrilis'];
$versi = $_POST['versi'];
$genre = $_POST['genre'];
$isipaket = $_POST['isipaket'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
if (empty($idgame)){
echo "<script>alert('Id Game belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else 
if(empty($namagame)){
echo "<script>alert('Nama Game belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else 
if(empty($tglrilis)){
echo "<script>alert('Tanggal Rilis belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else 
if(empty($versi)){
echo "<script>alert('Versi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else 
if(empty($genre)){
echo "<script>alert('Genre belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else 
if(empty($isipaket)){
echo "<script>alert('Isi Paket belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else 
if(empty($harga)){
echo "<script>alert('Harga belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else 
if(empty($deskripsi)){
echo "<script>alert('Deskripsi belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else{
$sql = "INSERT INTO tb_barang (idgame,namagame,tglrilis, versi, genre, isipaket, harga, deskripsi) values ('$idgame','$namagame','$tglrilis','$versi','$genre','$isipaket','$harga','$deskripsi')";
$query = mysqli_query($db, $sql);
if ($query){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}
}
?>

<!-- 
Sumber : http://ardisaputraaa.blogspot.com/2013/09/cara-membuat-form-daftar-login-dan.html#ixzz5Yjxjk9oT -->