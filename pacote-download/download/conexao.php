<?php

$servidor =  "localhost";
$usuario =   "rafael";
$senha =     "";
$nomeBanco = "sistemasgp";
//criar a conexao
$conn = mysqli_connect($servidor,$usuario,$senha,$nomeBanco);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}



