<?php

$servername = "localhost";
$username = "root";
$passwordDB = "";
$dbname = "surat_elektronik";

// Create connection
$conn = mysqli_connect($servername, $username, $passwordDB, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully using Mysqli Procedural";