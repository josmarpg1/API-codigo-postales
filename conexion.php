<?php

$link='mysql:host=localhost;dbname=api';
$usuario='root';
$pass='';

try{
    $pdo=new PDO($link,$usuario,$pass);

}catch(PDOException $e){
    print "error: " . $e->getMessage() . "<br/>";
    die();

}