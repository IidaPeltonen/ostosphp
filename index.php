<?php
    /* require_once 'inc/functions.php';
    require_once 'inc/headers.php'; */
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    /* $db = openDB(); */
    $db = new PDO('mysql:host=localhost;dbname=shoppinglist;charset=utf8','root','');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql = "select * from item";
    $query = $db->query($sql);
    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    header('HTTP/1.1 200 OK');
    print json_encode($results);
