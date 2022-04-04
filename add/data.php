<?php
include "../dataBase.php";
date_default_timezone_set('Europe/Moscow');


function addData($t, $b, $g, $pdo){
    try{
        
        $query = "INSERT INTO sensors(temperature, barometer, gas, time, date) VALUES (:t, :b, :g, :time, :date)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":t",$t);
        $stmt->bindParam(":b",$b);
        $stmt->bindParam(":g",$g);
        $stmt->bindParam(":time", date("H:i:s"));
        $stmt->bindParam(":date", date('Y-m-d'));
        $stmt->execute();
    }catch(PDOException $e){
        echo $e;
    }


}

$t = $_GET["temp"]; 
$b = $_GET["bar"];
$g = $_GET["gas"];
if( $t and $b and $g){
    addData($t, $b, $g, $pdo);
    $status = "ok";
}else{
    $status = "fail";
}

$query = "SELECT * FROM lamp";
$stmt = $pdo->prepare($query);
$stmt->execute();
$row = $stmt->fetch();
echo json_encode(["status" => $status, "lamp" => $row["status"]]);



