<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "10_07";

// Erstellt die Verbindung mit mysqli objekt
$conn = new mysqli($servername, $username, $password, $database);

// Prüft die Verbindung
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
