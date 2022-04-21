<?php

header("Content-Type: application/json");
include "../dataBase.php";
date_default_timezone_set('Europe/Moscow');


function check_lamp($status, $pdo){
    try{
        
        
            $query = "INSERT INTO lamp (status, date, time) VALUES (:status, :date, :time)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":status",$status);
            $stmt->bindParam(":time", date("H:i:s"));
            $stmt->bindParam(":date", date('Y-m-d'));
            $stmt->execute();   
        return $status;
        

       }catch(PDOException $e){
        echo $e;
    }
}


$data = json_decode(file_get_contents("php://input"));
$res = check_lamp($data->status, $pdo);
echo json_encode(["lamp_status" => $res]);