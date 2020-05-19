<?php
    //$serverName = "10.1.1.217";
    //$connectionInfo = array( "Database"=>"CORP_TESTE", "UID"=>"sa", "PWD"=>"@@SA@@##2013##" 
//);
    //$conn = sqlsrv_connect( $serverName, $connectionInfo);
    //if( $conn === false ) {
    //     die( print_r( sqlsrv_errors(), true));
    //}

      $servidor =  "localhost";
        $usuario =   "root";
        $senha =     "";
        $nomeBanco = "sistemasgp";
        //criar a conexao
        $conn = mysqli_connect($servidor,$usuario,$senha,$nomeBanco);

        if (!$conn) {
            die('Could not connect: ' . mysql_error());
        }
    
  $codigo       = $_REQUEST['codigo'];
 
  $result = "SELECT * FROM `cargo` WHERE CODIGO=".$codigo;
  
  $dados = mysqli_query( $conn, $result);
  $resultado = mysqli_fetch_array( $dados);
// $resultado['SEQUENCIAL'];        
    
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
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">-->
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
               
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav my-lg-0">
                       
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <button type="button" class="btn btn-sm pull-right"><a  style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="listatabelacargo.php">Fechar</a></button>
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <div class="row">
                    <div class="col-lg-9 mt-5" style="margin-left: 100px">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Editar Cargo</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="processar.php">
                                    <div class="form-body">
                                        
                                        <div class="row p-t-20">
                                           
                                            <!--/span-->
                                            <div class="col-md-5">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">CBO</label>
                                                    <input type="text" id="cbo" name="cbo"class="form-control" value="<?php  echo $resultado['cbo']; ?>">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Tipo MO</label>
                                                    <input class="form-control " id="tipomo" name="tipomo"value="<?php  echo utf8_encode($resultado['tipomo']); ?>">
                                                   
                                                </div>
                                            </div>
                                            
                                            <!--/span-->    
                                        </div>
                                        
                                        <div class="row p-t-20">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">cargo</label>
                                                    <input type="text" id="cargo" name="cargo" class="form-control" value="<?php  echo utf8_encode($resultado['cargo']); ?>">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-5">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Grupo de Cargo</label>
                                                    <input class="form-control " id="grupo" name="grupo"value="<?php  echo utf8_encode($resultado['grupocargo']); ?>">
                                                   
                                                </div>
                                           </div>
                                    </div>
                                            <!--/span-->  
                                        <div class="row p-t-20">
                                            
                                            <!--/span-->
                                            <div class="col-md-5">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Grupo de Risco</label>
                                                    <input type="text" id="gruporisco" name="gruporisco" class="form-control" value="<?php  echo utf8_encode($resultado['grupoderisco']); ?>">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">Descrição da Atividade</label>
                                                    <textarea type="text" id="descricaoatividade" name="descricaoatividade" class="form-control"  > <?php  echo utf8_encode($resultado['descricaodaatividade']); ?></textarea>
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                        </div>   
                                          
                                    </div>
                                      <input  name="codigo" type="hidden" id="codigo" value="<?php echo 
                                                 $resultado['codigo'];  ?>">
                                      
                                      <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Alterar</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                    
                                </form>
                                
                            </div>
                                        
                        </div>
                    </div>
                </div>
                                       
                                
            <!-- ============================================================== -->
            <footer class="footer"> © 2020 Sistema de gestão projeto </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
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


