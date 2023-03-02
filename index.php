<?php

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET,POST,OPTIONS');
header('Access-Control-Allow-Headers:Content-Type');

if($_SERVER['REQUEST_METHOD']==='OPTIONS'){
    return 0;
}

try{
    $db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8','root','');
    $sql = "SELECT * FROM item";
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    header('HTTP/1.1 200 OK');
    print json_encode($results);
}catch (PDOException $pdoex){
    header('HTTP/1.1 500 Internal Server Error');
    $error= array('error' => $pdoex->getMessage());
    print json_encode($error);
}

?>
