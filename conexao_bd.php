<?php

//Conex�o ao Banco de Dados

$conect = mysql_connect("localhost", "clubedam_user", "clubcampeao2013");
if (!$conect) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
$cdm_db = mysql_select_db("clubedam_newsletter");

//For�a query com acentua��o padr�o UTF-8
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

?>