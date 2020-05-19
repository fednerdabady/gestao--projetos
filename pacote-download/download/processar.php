<?php
        //$serverName = "10.1.1.217";
        //$connectionInfo = array( "Database"=>"CORP_TESTE", "UID"=>"sa", "PWD"=>"@@SA@@##2013##" );
        //$conn = sqlsrv_connect( $serverName, $connectionInfo);
        //if( $conn === false ) {
         //    die( print_r( sqlsrv_errors(), true));
       // }
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
        $cbo        = $_REQUEST['cbo'];
        $tipomo    = $_REQUEST['tipomo'];
        $grupo    = $_REQUEST['grupo'];
        $cargo   = $_REQUEST['cargo'];
        $gruporisco   = $_REQUEST['gruporisco'];
        $descricaoatividade    = $_REQUEST['descricaoatividade'];
        //$incluiu    = $_REQUEST['incluiu'];
       // $numero     = $_REQUEST['numero'];
        //$entrega    = $_REQUEST['entrega'];

        $sql = " UPDATE CARGO SET CARGO='$cargo',CBO='$cbo',GRUPODERISCO='$gruporisco' , "
                . " DESCRICAODAATIVIDADE='$descricaoatividade' WHERE CODIGO='$codigo' ";  


        $stmt = mysqli_query( $conn, $sql);
        if( !$stmt ) {
                die( print_r(mysqli_error(), true));
        }
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows( $conn )){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT ='0;URL=http://localhost/sistema/listatabelacargo.php'>
				<script type=\"text/javascript\">
					alert(\"Linha alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sistema/listatabelacargo.php'>
				<script type=\"text/javascript\">
					alert(\"Linha não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>





