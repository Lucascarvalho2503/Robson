<?php
$content = file_get_contents('php://input');
$json = json_decode($content);
$user_name = $json->$usuario;
$host = "localhost";
$banco = "teste";
$usuario = "root";
$senha = '';
$con = new PDO("mysql:host={$HOST};dbname={$banco}",
$username, $password);
$strm = $con->prepare("select * from usuarios where nome = usuario");
$stmt->execute(array('usuario' => $json->$usuario));
$row = $stmt->fetch();
if($row) {
    echo "recebi usuario ".$row['id'];
} else {
    echo "usuario invalido";
}