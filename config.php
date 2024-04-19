<?php
$server = "sql108.infinityfree.com";
$username = "if0_36384798";
$password = "xJzLHuob75YyW";
$db_name = "if0_36384798_kitty";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$conn->autocommit(true);
?>