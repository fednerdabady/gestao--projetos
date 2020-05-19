<?php
//include_once("conexao.php");
$conn = new mysqli("localhost","rafael","","sistemasgp");
mysqli_set_charset( $conn,"utf8");

$arquivo    = $_FILES["file"]["tmp_name"];
$nome       = $_FILES["file"]["name"];
$tamanho    = $_FILES["file"]["size"];

$fp = fopen($arquivo, "rb"); //Abro o arquivo que esta no $tmp
$documento = fread($fp,$tamanho); // Lei o binario do arquivo
                        fclose($fp); // fecho o arquivo
$dados = bin2hex($documento);

$caminho = "Arquivos/".$nome;
move_uploaded_file($arquivo, $caminho);

$sql = "INSERT INTO arquivos (nome,tamanho,conteudo,data) VALUES ('$nome','$tamanho','$dados',now())";
$result = $conn->query($sql) or die(mysqli_errno());
//$resultado = mysqli_query($conn, $sql);