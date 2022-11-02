<?php

include 'model_login.php';
include 'db_connection.php';

$uniqueId = strval($_GET["uniqueId"]);
$ip_conexao = strval($_GET["ip"]);
$usuario = "";
$senha = "";
$email = "";

echo $ip_conexao;

$login = new Login();

$login->token = $uniqueId;
$login->id = $uniqueId;
$login->usuario = $usuario;
$login->senha = $senha;
$login->email = $email;
$login->ip_conexao = $ip_conexao;


$ref = 'Login/' . $uniqueId;

$postdata = $database->getReference($ref)->set($login);