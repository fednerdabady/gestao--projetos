<?php
$conn = new mysqli("localhost","rafael","","sistemasgp");
mysqli_set_charset( $conn,"utf8");
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
        <style rel="stylesheet" type="text/css">
            #modal{
                background: rgba(0,0,0,0.1);
                width: 100%;
                height: 100%;
                position: fixed;
                left: 0;
                top: 0;
                display: none;
            }
            .modal-box{
                background: #ffffff;
                width: 40%;
                top:  23%;
                height: 300px;
                left: 50%;
                position: absolute;
                margin-left: -20%;

            }
            .fechar{
                padding: 2px 8px;
                border: 1px solid #003eff;
                position: absolute;
                right: 10px;
                top: 4px;
				width:39px;
				height:28px;
                text-align:center;
                color: #000;
                cursor: pointer;
            }
            .fechar:hover{
                color: #500;
                border-color: #C00;
                background-color: #C00;
            }
        </style>

    </head>
    <?php
    session_start();
    ob_start();
    if (!empty($_SESSION['id'])) {
        //echo "ola".$_SESSION['nome'].", Bem vindo <br>";
    } else {
        //$_SESSION['msg'] = "Area restrita";
        header("location:login.php");
    }
    ?>
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
					<h1 class="text-white"style="font-family: Montserrat ;font: 25px Verdana, Geneva, sans-serif; margin-left: 600px "> Segurança</h1> 
                </nav>
                <!--<nav class="navbar top-navbar navbar-expand-md navbar-light">
                       <a class="navbar-brand" href="#" style="margin-left:-41px;padding-top:0px;padding-bottom:12px"><img class="img-thumbnail" alt="logo" src="./imagens/logopassaura.BMP"></a>
                    <div class="navbar-collapse">

                        <ul class="navbar-nav my-lg-0">
                            <h1 style="font-family: Montserrat ;font: 25px Verdana, Geneva, sans-serif; margin-left: 400px">Seguranca</h1> 
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
						     <button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif"href="apr.php">ARP</a></button>
							 <button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="eventos.php">Eventos</a></button>
							 <button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="liberacaopt.php">Liberação PT</a></button>
							 <button type="button" class="btn btn-sm"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="treinamento.php">Treinamento </a></button>
							 <button type="button" class="btn btn-sm pull-right "><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif;color:red;" href="login.php">Sair</a></button>
                            <button type="button" class="btn btn-sm pull-right m-r-5"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="index.php">Voltar</a></button>
                                                    						
							<li>
							<div class="dropdown">
								<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif">
								  Tabelas
								</button>
								<div class="dropdown-menu">
								 <a href="#"class="btn-modal" style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif">DDS</a>
								</div>
							</div>
						</li>
							
                        </ul>
                    </nav>
                                <!-- End Sidebar navigation -->
                </div>
                                <!-- End Sidebar scroll-->
            </aside>

                                <div class="page-wrapper" style="background-color:lavender;">
                                    <!-- ============================================================== -->
                                    <!-- Container fluid  -->
                                    <!-- ============================================================== -->
                                    <div class="container-fluid">


                                        <!-- modal -->


                                        <div id="modal">
                                            <div class="modal-box">
                                                <h4 class="modal-title text-center" id="#modal" style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif">Informe a Frente e a Equipe</h4><hr>
                                                <div class="modal-box-conteudo">
                                                    <form class="form-horizontal form-material" id="loginform"  method="post" action="">
                                                        <!--<h1 class="title has-text-grey"  style="font-family: Montserrat;font-size:16px;color: black;text-align: center;font: 25px Verdana, Geneva, sans-serif ">Acessar</h1>-->

                                                        <div class="form-group">

                                                            <div class="form-group">

                                                                <div class="col-xs-6">
                                                                    <select class="form-control" type="text" name="frente" required="" placeholder="Frente">
                                                                        <option value=""> Escolha a Frente</option>
                                                                        <?php
                                                                        require_once 'conexaoserver2.php';

                                                                        $query1 = "SELECT(SELECT NOME FROM DO_FUNCIONARIOS WHERE HANDLE=RESPONSAVEL)RESPONSAVEL,
                                                                              CASE WHEN TURNO =1 THEN 'DIA' WHEN TURNO=2 THEN 'NOITE' END TURNO,
                                                                            (SELECT NOMEPROJETO FROM K_OBRA_PROJETOINTERNO WHERE HANDLE=PROJETOINTERNO AND PROJETOINTERNO IS NOT NULL)FRENTESERVICO,
                                                                            (SELECT NOMEOBRA FROM K_AREATRABALHO WHERE HANDLE=OBRA)OBRA,NOME
                                                                             FROM K_EQUIPE WHERE INATIVA='N' AND PROJETOINTERNO IS NOT NULL ";
                                                                        $result1 = sqlsrv_query($conn, $query1);
                                                                        //$row = mysqli_fetch_array($result1);
                                                                        //$codigo = $row['codigo'];
                                                                        //echo $codigo;
                                                                        while ($row = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC)) {
                                                                            echo '<option value="' . $row['HANDLE'] . '">' . utf8_encode($row['FRENTESERVICO']) . '</option>';
                                                                        }
                                                                        ?>  
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col-xs-6">
                                                                    <select  class="form-control" name="equipe" id="equipe" required="" placeholder="Equipe">
                                                                        <option value=""> Escolha a Equipe</option>
                                                                        <?php
                                                                        require_once 'conexaoserver2.php';

                                                                        $query1 = "SELECT(SELECT NOME FROM DO_FUNCIONARIOS WHERE HANDLE=RESPONSAVEL)RESPONSAVEL,
                                                                                  CASE WHEN TURNO =1 THEN 'DIA' WHEN TURNO=2 THEN 'NOITE' END TURNO,
                                                                                (SELECT NOMEPROJETO FROM K_OBRA_PROJETOINTERNO WHERE HANDLE=PROJETOINTERNO)FRENTESERVICO,
                                                                                (SELECT NOMEOBRA FROM K_AREATRABALHO WHERE HANDLE=OBRA)OBRA,NOME
                                                                                 FROM K_EQUIPE WHERE INATIVA='N' ";
                                                                        $result1 = sqlsrv_query($conn, $query1);
                                                                        //$row = mysqli_fetch_array($result1);
                                                                        //$codigo = $row['codigo'];
                                                                        //echo $codigo;
                                                                        while ($row = sqlsrv_fetch_array($result1, SQLSRV_FETCH_ASSOC)) {
                                                                            echo '<option value="' . $row['HANDLE'] . '">' . utf8_encode($row['NOME']) . '</option>';
                                                                        }
                                                                        ?>   
                                                                    </select>
                                                                </div>
                                                            </div>

                                                           
                                                             <div class="form-group m-b-3">
                                                                <div class="col-lg-12 text-center">
                                                                   <button type="submit" class="btn btn-outline-success my-8 my-sm-4" style="width:100px"> <a href="visualizar.php?acao=visualizar&id_arquivos=id_arquivos" target='_blank'>Abrir</a></button>
                                                                </div>
                                                            </div>
                                                            
                                                    </form>
                                                </div>
                                                <div class="fechar">X</div>

                                            </div>

                                        </div>


                                     
                                        
                                    </div>
                                    
                                </div>
								<footer class="footer" style="font-family: Montserrat ;font: 13px Verdana, Geneva, sans-serif;background-color:lavender;padding:2px"> 
									<img class="light-logo"  alt="logo" src="./imagens/favicon.png">
									Sistema de gestão projeto <span class="flaticon-telephone-1"></span> <span class="flaticon-email-filled-closed-envelope">  © 2020  </span>
								</footer>
                                
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

                                <script type="text/javascript">
                                    $(document).ready(function (e) {
                                        $('.btn-modal').click(function () {
                                            $('#modal').fadeIn(500);
                                        });
                                        $('.fechar, #modal').click(function (event) {
                                            if (event.target !== this) {
                                                return;
                                            }
                                            $('#modal').fadeOut(500);

                                        });

                                    });
                                </script>
				</body>

				</html>
				
                             