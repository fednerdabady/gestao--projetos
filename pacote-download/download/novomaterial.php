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
        <header class="topbar"style="height:60px">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="#" style="margin-left:-41px;padding-top:0px;padding-bottom:12px"><img class="img-thumbnail" alt="logo" src="./imagens/logopassaura.BMP"></a> 
                    <div class="navbar-collapse">
                        <ul class="navbar-nav my-lg-0">
                            <h1 style="font-family: Montserrat ;font: 25px Verdana, Geneva, sans-serif; margin-left: 400px">Novo Material</h1> 
                        </ul>
                    </div>
                </nav>
            </header>
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                   
                    <button type="button" class="btn btn-sm pull-right "><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif;color:red;" href="login.php">Sair</a></button>
                    <button type="button" class="btn btn-sm pull-right m-r-5"><a style="font-family: Montserrat ;font: 15px Verdana, Geneva, sans-serif" href="material.php">Voltar</a></button>
                          
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
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
                    <div class="col-lg-12 mt-5">
                        <div class="card card-header">
                            <div class="card-header">
                                <h1 class="m-b-0 text-center"> Cadastro</h1>
                            </div>
                            <div class="card-body">
                                <form action="#" style="font-family: Montserrat; color:blue;font: 13pt Verdana, Geneva, sans-serif;">
                                    <div class="form-body">
                                        
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">CodigoMaterial</label>
                                                     <input type="text" id="codmaterial" name="codmaterial"class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">discriminacaoMaterial</label>
                                                    <input type="text" id="discriminacaoMaterial" name="discriminacaoMaterial"class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div>
                                            </div>
                                            <!--/span-->    
                                        </div>
                                        </div>
                                        
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">unidadeMaterial</label>
                                                    <input type="number" id="unidadeMaterial" name="unidadeMaterial" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">dimensoesMaterial</label>
                                                    <input type="text" id="dimensoesMaterial" name="dimensoesMaterial" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>
                                            <!--/span-->  
                                                                                   
                                                                                   
                                                                                
                                                                                   
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">pesoMaterial</label>
                                                    <input type="text" id="pesoMaterial" name="pesoMaterial" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                               </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">especificacaoCod</label>
                                                    <input type="number" id="especificacaoCod" name="especificacaoCod" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">grupoMatCod</label>
                                                    <input type="number" id="grupoMatCod" name="grupoMatCod" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                               </div>
                                            
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">tipoMatCod</label>
                                                    <input type="number" id="tipoMatCod" name="tipoMatCod" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                            </div>
                                        </div>   
                                            
                                       <!--/span-->
                                       <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">tipoFabricacao</label>
                                                    <input type="text" id="tipoFabricacao" name="tipoFabricacao" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                               </div>
                                            
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">siglaScheduleCod</label>
                                                    <input type="number" id="siglaScheduleCod" name="siglaScheduleCod" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                            </div>
                                        </div>   
                                         <!--/span-->
                                         <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">normaCod</label>
                                                    <input type="number" id="normaCod" name="normaCod" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                               </div>
                                            
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">areaPinturaM2</label>
                                                    <input type="text" id="areaPinturaM2" name="areaPinturaM2" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> 
                                                </div> 
                                            </div>
                                        </div>   
                                       
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
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






