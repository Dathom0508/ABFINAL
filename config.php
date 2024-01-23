<?php
$servername = "localhost";
$username = "root";
$password = "Thomesita0508?";
$dbname = "tiendaf";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
