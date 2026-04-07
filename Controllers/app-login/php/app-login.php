<?php
require("../../Database/Database.php");
// recuperation des données du formulaire
$logintel = mysqli_real_escape_string($conn, trim($_POST["registerPhone"]));
$loginpassword = mysqli_real_escape_string($conn, trim($_POST["registerPassword"]));
$hashPassword = base64_encode($loginpassword);
// Check If the User exists

$request = "SELECT * FROM utilisateur WHERE numero = '$logintel' ";
$query = mysqli_query($conn, $request);
$password = mysqli_fetch_assoc($query);
$password = $password['mot_de_passe'];
if($password == $hashPassword){
    $CallBack = [
    "status" => "success",
    "message" => "Identification Success"
]; 
echo json_encode($CallBack);
    exit();
}
if($password != $hashPassword){
    $CallBack = [
    "status" => "error",
    "message" => "Error Login"
]; 
echo json_encode($CallBack);
    exit();
}
// else{
//         $CallBack = [
//     "status" => "error",
//     "message" => "Error login"
// ]; 
// echo json_encode($CallBack);
//     exit();
// }