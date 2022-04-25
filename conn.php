<?php

function connection() {
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = "ramadhan";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

    if (! $conn) {
    die('Koneksi gagal: ' . mysqli_error());
    }
    
    mysqlI_select_db($conn, $dbName);

    return $conn;
}