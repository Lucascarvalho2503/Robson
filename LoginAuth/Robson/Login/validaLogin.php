<?php
require_once("autenticacao.php");

$login = $_POST['usu'];
$senha = $_POST['sen'];
$Auth = new autenticacao($login);
if ($Auth->validaSenha($senha)) {
    $token = $Auth->tokenValidp();
    if($token == null){
        $token = $Auth->gerarToken();
    }
    $response = [
        "status" => "1",
        "msg" => "Login efetuado com sucesso!",
        "token" => $token
    ];
} else {
    $response = [
        "status" => "0",
        "msg" => "Usuário ou senha inválido"
    ];
}
echo json_encode($response); //fim
