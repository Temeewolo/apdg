<?php
include "./Controllers/Database/Database.php";
$request = "SELECT * FROM produit";
$query = mysqli_query($conn,$request);
?>