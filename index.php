<?php 
header('Content-type: application/json');
$arr = array("time" => date(DATE_RFC822));
echo json_encode($arr);