<?php
require_once("Banco.php");
$banco = new Banco();

$login = $_POST['usu'];
$senha = $_POST['sen'];
$sql = "select * from usuario u where u.email_login = '{$login}' ";
$result = $banco->Consultar($sql);
$usuario = $result[0];//incio
if ($usuario['senha'] == $senha) {
    $token = md5(uniqid(mt_rand(), true));
    $idusuario = $usuario['id'];
    $sql = "select *
              from login_control
             where idusuario = {$idusuario}
               and now() between criado and expira
             order by id desc
             limit 1";
    $result = $banco->Consultar($sql);
    $log_acesso = $result[0];//incio
    if (isset($log_acesso['token'])) {
        $token = $log_acesso['token'];
    } else {
        $sql = " insert into login_control " .
            " ( idusuario, token, criado, expira) " .
            " values " .
            " ( {$idusuario}, '{$token}', now(), DATE_ADD(now(), INTERVAL 12 hour)) ";
        $banco->Executar($sql);
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
