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
     <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title> Sistema SGP</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    
</head>
<?php
session_start();
ob_start();
if(!empty($_SESSION['id'])){
   //echo "ola".$_SESSION['nome'].", Bem vindo <br>";
}else{
    //$_SESSION['msg'] = "Area restrita";
   header("location:login.php");
}?>
<body class="fix-header fix-sidebar card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" style="height:60px">
		        <nav class="navbar top-navbar navbar-expand-md navbar-light">
					<!-- ============================================================== -->
					<!-- Logo -->
					<!-- ============================================================== -->
					<div class="navbar-header" style="margin-left:-41px;padding-top:0px;padding-bottom:12px">
						<a class="navbar-brand" href="index.php" >
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
					<h1 class="text-white"style="font-family: Montserrat ;font: 25px Verdana, Geneva, sans-serif; margin-left: 600px "> Materias</h1> 
                </nav>
            <!--<nav class="navbar top-navbar navbar-expand-md navbar-light">
               <a class="navbar-brand" href="#" style="margin-left:-41px;padding-top:0px;padding-bottom:12px"><img class="img-thumbnail" alt="logo" src="./imagens/logopassaura.BMP"></a>
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav my-lg-0">
                        <h1 style="font-family: Montserrat ;font: 25px Verdana, Geneva, sans-serif; margin-left: 400px">Materias</h1> 
                    </ul>
                </div>
            </nav>-->
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   <ul id="sidebarnav"> 
				            <button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="localizacao.php">Localização</a></button>
							<button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="material.php">Material</a></button>
							<button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="movimentacao.php">Movimentação</a></button>
							<button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif"  href="patrimonio.php" >Patrimônio </a></button>
							<button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif"  href="saldo.php" >Saldo </a></button>
							<button type="button" class="btn btn-sm pull-right "><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif;color:red;" href="login.php">Sair</a></button>
                            <button type="button" class="btn btn-sm pull-right m-r-5"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="index.php">Voltar</a></button><!--<li style="margin-left: 90px"><i class="mdi mdi-menu"></i><span class="hide-menu">Relatorios</span>
                         <!--<li style="margin-left: 90px"><i class="mdi mdi-menu"></i><span class="hide-menu">Relatorios</span>
                                <ul aria-expanded="false" class="collapse">
                                        <a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Planilha Valmet</h4></a>
										<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Grupo de materiais</h4></a>
										<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Lista de conteiners</h4></a>
										<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Localizaçoes</h4></a>
										<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Materiais Previstos</h4></a>
                                </ul>
                            </li>-->
							<li>
							<div class="dropdown">
								<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif">
								  Relatorios
								</button>
								<div class="dropdown-menu">
								        <a  href="#">Planilha Valmet</a>
										<a  href="#">Grupo de materiais</a>
										<a  href="#">Lista de conteiners</a>
										<a  href="#">Localizaçoes</a>
										<a  href="#">Materiais Previstos</a>
  								</div>
							</div>
						</li>
							<!--<li style="margin-left: 90px"><i class="mdi mdi-menu"></i><span class="hide-menu">Consultas</span>
                                <ul aria-expanded="false" class="collapse">
                                   <a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Materiais requisitados</h4></a>
									<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Materiais separados</h4></a>
									<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Planilha Valmet</h4></a>
									<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="#"><h4 class="text-muted">Planilha de Saldo</h4></a>
                                              
                                </ul>
                            </li>-->
							<li>
							<div class="dropdown">
								<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif">
								 Consultas
								</button>
								<div class="dropdown-menu">
								     <a  href="#">Materiais requisitados</a>
                                    <a  href="#"> Materiais separados</a>
                                    <a  href="#">Planilha Valmet</a>
                                    <a  href="#">Planilha de Saldo</a>
                                      
								</div>
							</div>
						</li>
							
				   </ul>
                
                <!--<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif; margin-left: 700px" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Página Principal </span></a>-->

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background-color:lavender;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                 <!--<div class=" col-md-1 col-lg-4 pull-right">
               
                           <div class="card">
                                        <div class="card-body" >
                                                <div class="col p-r-0 align-self-center">
                                                
                                                
                                              </div>
                                           
                                        </div>
                                    </div>  
                              </div>-->
                            
                            
                                
            <!-- ============================================================== -->
            
			
           <footer class="footer" style="font-family: Montserrat ;font: 13px Verdana, Geneva, sans-serif;background-color:lavender;padding:2px"> 
				<img class="light-logo"  alt="logo" src="./imagens/favicon.png">
				Sistema de gestão projeto <span class="flaticon-telephone-1"></span> <span class="flaticon-email-filled-closed-envelope">  © 2020  </span>
			</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
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
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard1.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>







