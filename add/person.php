<?php

header("Content-Type: application/json");
include "../dataBase.php";
date_default_timezone_set('Europe/Moscow');


function updateLamp($name, $pdo){
    try{
    
        $query = "INSERT INTO person(name) VALUES (:name)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name",$name);
        $stmt->execute();
    }catch(PDOException $e){
        echo $e;
    }
}


$data = json_decode(file_get_contents("php://input"));
//data = {"name": "name"}
updateLamp($data->name, $pdo);
echo json_encode(["status" => "ok"]);