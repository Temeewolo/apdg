<?php
require("../../Database/Database.php");
// recuperation des données du formulaire
$productName = mysqli_real_escape_string($conn, trim($_POST["productName"]));
$productDescription = mysqli_real_escape_string($conn, trim($_POST["productDescription"]));
$productPrice = mysqli_real_escape_string($conn, trim($_POST["productPrice"]));

$request = "INSERT INTO produit (nom_p, description_p, prix) VALUES ('$productName','$productDescription',$productPrice)";
$query = mysqli_query($conn,$request);
$CallBack = [
    "status" => "success",
    "message" => "Product Added Successfully"
]; 
echo json_encode($CallBack);
  exit();