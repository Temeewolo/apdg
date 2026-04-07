<?php
$Host = "localhost";
$User = "root";
$Pass = "";
$DbName = "apdg";

// Test connexion
$conn = new mysqli($Host, $User, $Pass, $DbName);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

