<?php
 session_start();
 include_once("conexao.php");
 $btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
 if($btnLogin)
 {
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
        
	if((!empty($email)) AND (!empty($senha))){
		//Gerar a senha criptografa
		password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuÃ¡rio no BD
		$result_usuario = "SELECT id,nome,email,senha FROM usuarios WHERE email = '$email' LIMIT 1";
               //echo $result_usuario;
		$resultado_usuario = mysqli_query($conn, $result_usuario);
                
                 if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
                            
                      $_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
				  header("Location: index.php");
			     }else{   
				$_SESSION['msg'] = "
				<div id='alert' class='alert alert-danger' style='font-family:Montserrat; font: 12pt Verdana, Geneva, sans-serif;'>
					<button type='button' class='close' data-dismiss='alert' arial-label='Close'>
					   <span aria-hidden='true'>&times;</span>
					</button>
						Login ou senha incorreto!
				</div>
				
				<script >
					$('.close').click(function(event){
					$('#alert').fadeOut();
					event.preventDefault();
					});
				</script>
				";
				header("Location: login.php");
			}
		    }  
	             
        } else{
		$_SESSION['msg'] = "
		<div id='alert' class='alert alert-danger' style='font-family:Montserrat; font: 12pt Verdana, Geneva, sans-serif;'>
			<button type='button' class='close' data-dismiss='alert' arial-label='Close'>
			<span aria-hidden='true'>X</span>
			</button>
			Login ou senha incorreto!
		</div>
		<script>
			$('.close').click(function(event){
			$('#alert').fadeOut();
			event.preventDefault();
			});
		</script>
		";
		header("Location: login.php");
	   }
             
 }else{
	$_SESSION['msg'] = "
	 <div id='alert' class='alert alert-danger' style='font-family:Montserrat; font: 12pt Verdana, Geneva, sans-serif;'>
			<button type='button' class='close' data-dismiss='alert' arial-label='Close'>
			<span aria-hidden='true'>X</span>
			</button>
	          Pagina não encontrada
		  </div>
		  <script>
			$('.close').click(function(event){
			$('#alert').fadeOut();
			event.preventDefault();
			});
		</script>
	";
	header("Location: login.php");
  }
   
