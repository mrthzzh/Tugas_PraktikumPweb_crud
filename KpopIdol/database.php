<?php
$host= 'localhost';
$username = 'root';
$password = '';
$database = 'contact_db';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi sukses";
?>