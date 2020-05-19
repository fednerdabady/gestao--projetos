<?php
//habilita mensagens de erros
    $dbhost   = "10.1.1.6";   #Nome do host
    $db       = "corporativo";   #Nome do banco de dados
    $user     = "sa"; #Nome do usuário
    $password = "@@SA@@##2013##";   #Senha do usuário
       
        // Conexão com o banco
    $conninfo = array("Database" => $db, "UID" => $user, "PWD" => $password,"ReturnDatesAsStrings" =>1);
    $conn = sqlsrv_connect($dbhost, $conninfo);

       if($conn==FALSE)
	{
            die( print_r( sqlsrv_errors(), true));
        }
//                date_default_timezone_set('America/Sao_Paulo');
//                                                $data1 = new DateTime();
//                                                $data1=$data1->format('Y');
                                                
       
