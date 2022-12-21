<?php
require('connect_db.php');

$name = $_POST['name'];
$nos = $_POST['nos'];
$sut = $_POST['sut'];
$ket = $_POST['ket'];

                  
  $query = "INSERT INTO surat_keluar (name, no_surat,surat_tujuan,keterangan,file,created,modified ) VALUES ('$name',
    '$nos',
    '$sut',
    '$ket',
    '$nama_file',
    SYSDATE(),
    SYSDATE()

    )";
                  $result = mysqli_query($conn, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($conn).
                           " - ".mysqli_error($conn));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='tables-product.php';</script>";
                  }
