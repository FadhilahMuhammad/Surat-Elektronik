<?php
require 'connect_db.php';

$encryptPassword = sha1($_POST['password']);

$sql = "INSERT INTO user (email, name, password, role, date_created, date_modified, photo)
VALUES ('$email',
'$name',
'$encryptPassword',
'$role',
sysdate(),
sysdate(),
'$nama_file')";

if (mysqli_query($conn, $sql)) {
    echo "data berhasil dimasukkan ke database";
    header('Location: login.php');
    ob_end_flush();
} else {
    echo "gagal memasukkan data: " . mysqli_error($conn);
}

mysqli_close($conn);