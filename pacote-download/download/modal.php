<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, senha,data_cadastro) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['senha']. "',
					now()
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Usuario cadastrado com sucesso";
		
                header("location:login.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuario";
               // header("location:cadastrar.php");
               // header("Location: login.php");
	}
}
//echo "cliente cadastrado com sucesso...";
//echo "<a href= 'consulta.php'>consultar o banco de dados</a></br>";
?>