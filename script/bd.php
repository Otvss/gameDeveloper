<?php
    $HOST = "localhost";
    $USER = "otvss";
    $SENHA = "otaviohazard";
    $BD = "gd";   
    
    $CON = mysql_connect($HOST, $USER, $SENHA) or die("Erro ao conectar com o banco:\n"+mysql_error());
    
    mysql_select_db($BD, $CON);
?>