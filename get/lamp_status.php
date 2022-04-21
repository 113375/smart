<?php

header("Content-Type: application/json");
include "../dataBase.php";
date_default_timezone_set('Europe/Moscow');


function check_lamp($pdo){
    try{
        
        $query = "SELECT * from lamp";
        $stmt = $pdo->prepare($query);
   
        $stmt->execute();
        $stat = $stmt->fetchAll();
        return $stat;
       }catch(PDOException $e){
        echo $e;
    }
}


$data = json_decode(file_get_contents("php://input"));
$res = check_lamp($pdo);
echo json_encode(["status" => $res[sizeof($res) - 1]["status"]]);