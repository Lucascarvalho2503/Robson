<?php
class Banco {

    private $usuario;
    private $senha;
    private $servidor;
    private $porta;
    private $nome_banco;
    private $pdo;

    public function __construct() {
        $this->usuario = "root";
        $this->senha = "";
        $this->servidor = "localhost";
        $this->porta = "3306";
        $this->nome_banco = "teste2";
        $this->pdo = new PDO("mysql:host={$this->servidor};dbname={$this->nome_banco}", "root", "");

    }
    public function Consultar ($sql){
        $stm = $this->Executar($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function Executar ($sql){
        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        return $stm;
    }
}