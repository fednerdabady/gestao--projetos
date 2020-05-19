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
		$_SESSION['msgcad'] = "
		<div id='alert' class='alert alert-danger' style='font-family:Montserrat; font: 12pt Verdana, Geneva, sans-serif;'>
		<button type='button' class='close' data-dismiss='alert' arial-label='Close'>
			<span aria-hidden='true'>&times;</span>
		</button>
		Usuario cadastrado com sucesso
		</div>
		<script >
			$('.close').click(function(event){
			$('#alert').fadeOut();
			event.preventDefault();
			});
		</script>
		";
		
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>SGP - Acesso Restrito</title>
       <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    
</head>

<body>
    

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
	
	<header class="topbar" style="height:60px">
	             <nav class="navbar top-navbar navbar-expand-md navbar-light">
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<div class="navbar-header" style="margin-left:-41px;padding-top:0px;padding-bottom:12px">
						<a class="navbar-brand" href="#" >
							<b>
							   <img src="./imagens/logo-icon.png" alt="homepage" class="dark-logo" />
								<!-- Light Logo icon -->
								<img src="./imagens/logo-light-icon2.png" alt="homepage" class="light-logo" />
							</b>
							<span>
							 <!-- dark Logo text -->
							 <img src="./imagens/logo-text.png" alt="homepage" class="dark-logo" />
							 <!-- Light Logo text -->    
							 <img src="./imagens/logo-light-text1.png" class="light-logo" alt="homepage" /></span> </a>
					</div>
					<div class="navbar-collapse">
                   
                    <ul class="navbar-nav my-lg-0">
                        <h1 style="font-family: Montserrat ;font: 22px Verdana, Geneva, sans-serif; margin-left: 400px"> Cadastrar Usuario</h1> 
                      
                    </ul>
                </div>
                </nav>
            <!--<nav class="navbar top-navbar navbar-expand-md navbar-light">
                <a class="navbar-brand"  href="#"style="margin-left:-41px;padding-top:0px;padding-bottom:12px"><img  class="img-thumbnail" alt="logo" src="./imagens/logopassaura.BMP"></a>
                <div class="navbar-collapse">
                   
                    <ul class="navbar-nav my-lg-0">
                        <h1 style="font-family: Montserrat ;font: 22px Verdana, Geneva, sans-serif; margin-left: 400px"> Cadastrar Usuario</h1> 
                      
                    </ul>
                </div>
            </nav>-->
        </header>
		
<?php
       
  	if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
			}  
?>
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-color:lavender;" >        
            <div class="login-box card" style="margin-top: -91px">
            <div class="card-body">
                <form class="form-horizontal form-material" id="loginform"  method="POST" action="">
                    <!--<h3 class="box-title m-b-20">Cadastro</h3>-->
                     
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="nome" autocomplete="off" required="" placeholder="Nome"> </div>
                     </div>
                    
                     <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" name="email" autocomplete="off"  required  placeholder="Email"> </div>
                    </div>
                    
                     <!--<div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="usuario" required  placeholder="Usuario"> </div>
                    </div>-->
                    <div class="form-group">
                        <div class="col-xs-12">
                         <input class="form-control" type="password" name="senha" required  placeholder="Senha"> </div>
                    </div>
					
					
					<div class="form-group text-center m-t-20">
                        <input type="submit" class="btn btn-block tx-tfm" name="btnCadUsuario" style="font-family: Montserrat;font-size:16px;color: whitesmoke;background-color: #1e88e5;font: 15px Verdana, Geneva, sans-serif " value="Cadastrar"><hr>
                        <!--<p class="text-center" style="font-family: Montserrat;font-size:20px;color:#1e88e5;font: 15px Verdana, Geneva, sans-serif">Esqueceu sua senha? <a href="recuperar_senha.php" id="signup" style='font-family: Montserrat;font-size:10px;font: 15px Verdana, Geneva, sans-serif;color: #ef3e2e'>Clique aqui </a> </p>-->
                        <p class="text-center" style="font-family: Montserrat;font-size:15px"> <a href="login.php" id="signup" style='font-family: Montserrat;font-size:10px;font: 15px Verdana, Geneva, sans-serif;color: #ef3e2e'>Voltar</a> </p>
                    </div>
                    
                </form>
            </div>
          </div>
        </div>
        
    </section>
	<footer class="footer" style="font-family: Montserrat ;font: 13px Verdana, Geneva, sans-serif;background-color:lavender;padding:2px"> 
			<img class="light-logo"  alt="logo" src="./imagens/favicon.png">
			Sistema de gestão projeto <span class="flaticon-telephone-1"></span> <span class="flaticon-email-filled-closed-envelope">  © 2020  </span>
	</footer>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
   
</body>

</html>
