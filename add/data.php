<?php
include "../dataBase.php";
date_default_timezone_set('Europe/Moscow');


function addData($t, $b, $pdo){
    try{
        
        $query = "INSERT INTO sensors(temperature, barometer,  time, date) VALUES (:t, :b,  :time, :date)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":t",$t);
        $stmt->bindParam(":b",$b);
        $stmt->bindParam(":time", date("H:i:s"));
        $stmt->bindParam(":date", date('Y-m-d'));
        $stmt->execute();
    }catch(PDOException $e){
        echo $e;
    }


}

$t = $_GET["temp"]; 
$b = $_GET["bar"];  
if( $t and $b ){
    addData($t, $b, $pdo);
    $status = "ok";
}else{
    $status = "fail";
}


echo json_encode(["status" => $status]);

?>

