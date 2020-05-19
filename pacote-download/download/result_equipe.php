
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">-->
    <title> Sistema SGP</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
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
                 <a class="navbar-brand" href="#" style="margin-left:-41px;padding-top:0px;padding-bottom:12px"><img alt="" src="./imagens/logopassaura.BMP"></a>
                <div class="navbar-collapse">
                        <ul class="navbar-nav my-lg-0">
                        <h1 style="font-family: Montserrat ;font: 25px Verdana, Geneva, sans-serif; margin-left: 400px">Pesquisar</h1> 
                    </ul>
                </div>
              </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   
                    <button type="button" class="btn btn-sm pull-right"><a  style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="listaequipe.php">Voltar</a></button>
                <!--<a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif; margin-left: 700px" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Página Principal </span></a>-->

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <div class="page-wrapper">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                              <div class="d-flex flex-wrap">
                                    
                           <table class="table stylish-table"  style="font-family: Montserrat; color:blue;font: 13pt Verdana, Geneva, sans-serif;">
                            <thead >
                                   <tr>
                                       
                                       <th scope="col">NOMEOBRA</th>
                                       <th scope="col">RESPONSAVEL</th>
                                       <th scope="col">EQUIPE</th>
                                       <th scope="col">FUNCIONARIOS</th>
                                       <th scope="col">FRENTESERVICO</th>
                                       
                                   </tr>
                            </thead>
                            <tbody>
                        
                         <?php
                            require_once 'conexaoserver2.php';	
                          $nomeobra = $_POST['nomeobra'];  
                          $nomeequipe = $_POST['nomeequipe'];   
                              
                          $result = "SELECT A.NOMEOBRA,
                                    (SELECT NOME FROM DO_FUNCIONARIOS WHERE HANDLE=B.RESPONSAVEL)RESPONSAVEL,
                                      B.NOME ,D.NOME NOMFUNC,E.NOMEPROJETO
                                    FROM K_AREATRABALHO A,K_EQUIPE B,K_HIST_EQUIPE C ,DO_FUNCIONARIOS D,K_OBRA_PROJETOINTERNO E
                                     WHERE B.OBRA=A.HANDLE AND C.EQUIPE=B.HANDLE AND C.FUNCIONARIO=D.HANDLE
                                     AND A.NOMEOBRA LIKE '%".$nomeobra."%' AND B.NOME LIKE '%".$nomeequipe."%'AND B.PROJETOINTERNO=E.HANDLE AND C.FINAL IS NULL ";
                                $resultado = sqlsrv_query( $conn, $result) or die(print_r(sqlsrv_errors()));
                                    //$row = sqlsrv_fetch_array($result);
                                    //$nome = $row['NOME'];
								
                              while ($row = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC)) {
								   ?>  
                                    <tr>
                                                 
                                                  <td><?php echo utf8_encode($row['NOMEOBRA']); ?> </td>
                                                 <td><?php echo utf8_encode($row['RESPONSAVEL']); ?> </td>
                                                 <td><?php echo utf8_encode($row['NOME']); ?> </td>
                                                 <td><?php echo utf8_encode($row['NOMFUNC']); ?> </td>
                                                 <td><?php echo utf8_encode($row['NOMEPROJETO']); ?> </td>
                                                 
                                                <!-- <td>
                                                 <?php echo "<a href='form_alterar.php?codigo=" . $row['codigo'] . "'> Alterar </a>"; ?>
                                                 <?php echo "<a href='processa_apagar.php?codigo=" . $row['codigo'] . "'> Excluir </a>"; ?>
                                                 </td>-->
                                                
                                    </tr>
                                     
                                <?php } ?>     
                             </tbody>
                               
                           </table>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>    
             
                      
            <footer class="footer" style="font-family: Montserrat ;font: 13px Verdana, Geneva, sans-serif;padding:1px;background-color:lavender;"> 
		   <img src="imagens/logo-simbolo.png" />
		   Sistema de gestão projeto <span class="flaticon-telephone-1"></span> <span class="flaticon-email-filled-closed-envelope">  © 2020  </span>
		</footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
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






