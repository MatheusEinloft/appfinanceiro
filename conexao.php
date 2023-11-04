<?php
require_once("config.php");

date_default_timezone_set("America/Sao_Paulo");
try {
    $pdo = new PDO("mysql:dbname=$database;host=$host;charset=utf8","$user","$password");
} catch (\Throwable $th) {
    $mensagem = 'Não foi possivel conectar ao banco de dados!';
    echo $mensagem . '<br> Motivo => '. $th->getMessage();
}