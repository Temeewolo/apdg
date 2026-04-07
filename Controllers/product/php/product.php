<?php
include "./Controllers/Database/Database.php";
$request = "SELECT * FROM produit WHERE id = 93";
$query = mysqli_query($conn, $request);
$result = mysqli_fetch_assoc($query);
$nom_produit = $result['nom_p'];
$description_produit = $result['description_p'];
$prix_produit = $result['prix'];
