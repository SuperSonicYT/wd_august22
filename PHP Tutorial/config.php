<?php
session_start();

$db_server = "localhost";
$db_database = "skillvertex";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_database);

if(!$conn) {
    echo "Database connectivity error",mysqli_connect_error();
}

?>