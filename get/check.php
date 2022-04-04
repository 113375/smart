<?php
include "../dataBase.php";
date_default_timezone_set('Europe/Moscow');

#TODO Создаёшь профиль человека Потом привязываешь к нему карточку, по которой он может проходить, что можно будет изменять в профиле 
#TODO добавление карт - выбираешь, кому надо добавить карту -> прислоняешь карту к датчику и привязываешь к этому профилю 


function checkData($card_id, $pdo){
    try{
    
        $query = "SELECT * FROM person INNER JOIN card ON person.person_id = card.person_id WHERE card_id = :c";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":c",$card_id);
        $stmt->execute();
        $row = $stmt->fetch();
        return $row;
    }catch(PDOException $e){
        echo $e;
    }
}


function addDataHystory($id, $pdo){
    try{
    
        $query = "INSERT INTO hystory (person_id, data, time) VALUES (:id, :date, :time)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->bindParam(":time", date("H:i:s"));
        $stmt->bindParam(":date", date('Y-m-d'));
        $stmt->execute();
    }catch(PDOException $e){
        echo $e;
    }


}

$card = $_GET["card_id"];
$res = checkData($card, $pdo);
if (!$res){
    echo json_encode(["status" => "fail"]);
}else{
    addDataHystory($res["person_id"], $pdo);
    echo json_encode(["status" => "ok"]);

}