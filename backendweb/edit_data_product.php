<?php
require "connect_db.php";

$id1 = $_GET['id'];

$sql1 = "UPDATE surat_keluar SET name='$name',
no_surat='$nos',
surat_tujuan='$sut',
keterangan='$ket',
file='$nama_file',
modified = sysdate()
WHERE id ='$id1'";

if (mysqli_query($conn, $sql1)) {

    header('Location: tables-product.php');
    ob_end_flush();

} else {
    echo "gagal mengedit data: " . mysqli_error($conn);
}

mysqli_close($conn);
//test