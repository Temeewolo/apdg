<?php
require "../../Database/Database.php";
$id = $_POST['id'];
// $request = "INSERT INTO selection (id_produit)
//            VALUES ('$id')";
// $query = mysqli_query($conn,$request);
$$request = "SELECT COUNT (id) AS total FROM selection WHERE id_produit = '$id'";
$query = mysqli_query($conn,$request);
$number = mysqli_fetch_assoc($query);

    $CallBack = [
        "status" => "success",
        "message" => "ID ".$id." Submitted",
        "number" => $number['total']
    ];
    echo json_encode($CallBack);
    exit();
