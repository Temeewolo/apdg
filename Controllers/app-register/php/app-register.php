<?php
require("../../Database/Database.php");
// recuperation des données du formulaire
$registername = mysqli_real_escape_string($conn, trim($_POST["registerName"]));
$registerPhone = mysqli_real_escape_string($conn,  trim($_POST["registerPhone"]));
$registerPassword = mysqli_real_escape_string($conn,  trim($_POST["registerPassword"]));
$hashPassword = base64_encode($registerPassword);

// Check If the User exists

$request = "INSERT INTO utilisateur (nom, numero, mot_de_passe) VALUES ('$registername',$registerPhone,'$hashPassword')";
$query = mysqli_query($conn, $request);
$CallBack = [
    "status" => "success",
    "message" => "Registering success"
]; 
echo json_encode($CallBack);
    exit();
