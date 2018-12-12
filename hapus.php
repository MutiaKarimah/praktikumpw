<?php

include("config.php");

if( isset($_GET['idgame']) ){

    $idgame = $_GET['idgame'];

    $sql = "DELETE FROM `tb_barang` WHERE `tb_barang`.`idgame` = '$idgame'";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: datapenjualan.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
