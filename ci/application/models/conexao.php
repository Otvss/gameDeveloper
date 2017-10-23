<?php
    header('Content-Type: text/html; charset=utf-8');

    define('host', 'localhost');
    define('user', 'otvss');
    define('senha', 'otaviohazard');
    define('bd', 'gd');
    
    $mysqli = new mysqli(host, user, senha, bd);
    
    //VERIFIAR CONEXAO
    if ($mysqli->connect_errno) {
        printf("Erro ao conectar com o banco de dados: %s\n", $mysqli->connect_error);
        exit();
    }
?>