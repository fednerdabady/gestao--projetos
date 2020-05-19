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
               <a class="navbar-brand" href="#"><img alt="" src="./imagens/logopassaura.BMP"></a> 
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
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Administração </span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index.php">Funcionario</a></li>
                                <li><a href="index2.php">Efetivo</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Segurance</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="index3.php">Liberações</a></li>
                                                              
                            </ul>
                        </li>
                         <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Planejamneto</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">EAP</a></li>
                                 <li><a href="#">Hístograma</a></li>
                                  <li><a href="#">Levantamento</a></li>
                                   <li><a href="#">Ordem de Serviço</a></li>
                                                              
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Materiais</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Localização</a></li>
                                 <li><a href="#">Material</a></li>
                                  <li><a href="#">Movimentação</a></li>
                                   <li><a href="#">Patrimônio</a></li>
                                   <li><a href="#">Saldo</a></li>
                                                              
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <!--<li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li> -->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Estoque</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="material.php">Material</a></li>
                                <li><a href="ativo.php">Ativo</a></li>
                                <li><a href="movimentacao.php">Movimentação de estoque</a></li>
                                                               
                                                               
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Controle</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="rdo.php">RDO</a></li>
                                <li><a href="clima.php">Clima</a></li>
                                <li><a href="avanco.php"> Avanco </a></li>


                                
                            </ul>
                        </li>

                         <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Qualidade</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="documento.php">Documento</a></li>
                                <li><a href="grd.php">GRD</a></li>
                                <li><a href="inspecoes.php">Inspeções</a></li>


                                
                            </ul>
                        </li>
                        
                                
                        </ul>
                        </li>
                        
                    </ul>
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
                    <div class="col-lg-12 mt-5">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white"> Cadastrar Funcionario</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <h3 class="card-title">Funcionario</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">CPF</label>
                                                    <input type="number" id="cpf" name="cpf" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Nome Completo</label>
                                                    <input type="text" id="nome" name="nome"class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                            <!--/span-->    
                                        </div>
                                        
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Apelido</label>
                                                    <input type="text" id="apelido" name="apelido" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Telefone</label>
                                                    <input type="tel" id="tel" name="telefone" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>
                                            <!--/span-->  
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Foto</label>
                                                    <input type="file" id="foto" name="foto" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input type="email" id="email" name="email" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                            
                                         
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Banco</label>
                                                    <input type="text" id="banco" name="banco" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Agencia</label>
                                                    <input type="text" id="agencia" name="agencia" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                            
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Conta</label>
                                                    <input type="text" id="conta" name="conta" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Tipo Conta</label>
                                                    <input type="text" id="tipoconta" name="tipoconta" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">RG</label>
                                                    <input type="text" id="rg" name="rg" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Pis</label>
                                                    <input type="text" id="pis" name="pis" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                            
                                         <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Logradouro</label>
                                                    <input type="text" id="logradouro" name="logradouro" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Numero</label>
                                                    <input type="number" id="numero" name="numero" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                       
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Bairro</label>
                                                    <input type="text" id="bairro" name="bairro" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">CEP</label>
                                                    <input type="text" id="cep" name="cep" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                            
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">NascimentoData</label>
                                                    <input type="date" id="nascimento" name="nascimento" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">NascimentoLocal</label>
                                                    <input type="text" id="nascimnetolocal" name="nascimentolocal" class="form-control" placeholder="dd/mm/yyyy">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                       
                                        <!--/row-->
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">PessoaNacionalidade</label>
                                                    <input type="text"  id="nacionalidade" name="nacionalidade"class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group has-success">
                                                    <label class="control-label">Sexo</label>
                                                    <select class="form-control custom-select">
                                                        <option value="">Masculino</option>
                                                        <option value="">Feminino</option>
                                                    </select>
                                                    <small class="form-control-feedback"></small> </div>
                                            </div>
                                            <!--/span-->
                                            
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                           <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">EstadoCivil</label>
                                                    <input type="text" id="estadocivil" name="estadocivil" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Escolaridade</label>
                                                    <input type="text" id="escoloridade" name="escolaridade" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                            
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Peso</label>
                                                    <input type="text" id="peso" name="peso" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Altura</label>
                                                    <input type="text" id="altura" name="altura" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">CorPele</label>
                                                    <input type="text" id="corpele" name="corpele" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">CorOlhos</label>
                                                    <input type="text" id="corolhos" name="corolhos" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">CorCabelos</label>
                                                    <input type="text" id="corcabelos" name="corcabelos" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">NomePai</label>
                                                    <input type="text" id="nomepai" name="nomepai" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span--> 
                                             <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">NacionalidadePai</label>
                                                    <input type="text" id="nacionalidadepai" name="nacionalidadepai" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">NomeMãe</label>
                                                    <input type="text" id="nomemae" name="nomemae" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span-->
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">NacionalidadeMãe</label>
                                                    <input type="text" id="nacionalidademae" name="nacionalidademae" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">RGOrgão</label>
                                                    <input type="text" id="rgorgao" name="rgorgao" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span-->
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">RGUF</label>
                                                    <input type="text" id="rguf" name="rguf" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">RGEmissão</label>
                                                    <input type="text" id="rgemissao" name="rgemissao" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span-->
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">TituloNumero</label>
                                                    <input type="text" id="titulonumero" name="titulonumero" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">TituloZona</label>
                                                    <input type="text" id="titulozona" name="titulozona" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span-->
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">TituloSeção</label>
                                                    <input type="text" id="titulosecao" name="titulosecao" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">TituloEmissao</label>
                                                    <input type="date" id="tituloemissao" name="tituloemisao" class="form-control" placeholder="dd/mm/yyyy">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <!--/span-->
                                             <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">TituloCidade</label>
                                                    <input type="text" id="titulocidade" name="titulocidade" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">ReservistaNumero</label>
                                                    <input type="date" id="reservistanumero" name="reservistanumero" class="form-control" placeholder="dd/mm/yyyy">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>   
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">ReservistaSeção</label>
                                                    <input type="text" id="reservistasecao" name="reservistasecao" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Fumante</label>
                                                   <select class="form-control custom-select">
                                                        <option value="">Sim</option>
                                                        <option value="">Não</option>
                                                    </select>
                                                    <small class="form-control-feedback"> </small> </div>
                                                                                                                                                       
                                            </div>
                                        </div>   
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Religião</label>
                                                    <input type="text" id="religiao" name="religiao" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">Sinais</label>
                                                   <input type="text" id="sinais" name="sinais" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                                                                                                                                       
                                            </div>
                                        </div>   
                                            <!--/span-->
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Deficiência</label>
                                                    <input type="text" id="deficienca" name="deficienca" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">NumeroCalçado</label>
                                                   <input type="text" id="calcado" name="calcado" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                                                                                                                                       
                                            </div>
                                        </div>   
                                            
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Manequim</label>
                                                    <input type="text" id="manequim" name="manequim" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <!--<div class="form-group has-danger">-->
                                                <div class="form-group">
                                                    <label class="control-label">CargosPretendidos</label>
                                                   <input type="text" id="cargospretendidos" name="cargospretendidos" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                                                                                                                                       
                                            </div>
                                        </div>   
                                            <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Situação</label>
                                                    <input type="text" id="situacao" name="situacao" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div> 
                                            </div>
                                            <!--/span-->
                                            
                                        </div>   
                                            <!--/span-->
                                        <!--/row-->
                                        
                                       
                                       
                                        <!--/row-->
                                       
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



