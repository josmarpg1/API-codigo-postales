<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');

if($_GET['moneda']){
    include_once 'conexion.php';

    $sql= 'select * FROM codigo_postale where codigo_postal =  '.$_GET['moneda'];
    $sentencia = $pdo->prepare($sql);
    $sentencia->execute();
    $datos = $sentencia->fetchAll();   
}else{
    echo 'solicituda no encontrada';
}
echo json_encode($datos);
