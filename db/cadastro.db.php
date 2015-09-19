<?php
	include 'conexao.php';



	$SQL = "INSERT INTO carros (marca,modelo,motor,ano,preco,cavalo,conEtanol,conGasolina,vlrRevisao,vlrSeguro)VALUES(?,?,?,?,?,?,?,?,?,?)";
	$stmt = mysqli_prepare($db,$SQL);
	mysqli_stmt_bind_param($stmt,"ssssssssss",$MARCA,$MODELO,$MOTOR,$ANO,$PRECO,$CAVALO,$CONETANOL,$CONGASOLINA,$VLRRESIVAO,$VLRSEGURO);

	$MARCA = $_POST['marca'];
	$MODELO = $_POST['modelo'];
	$MOTOR = $_POST['motor'];
	$ANO = $_POST['ano'];
	$PRECO = $_POST['preco'];
	$CAVALO = $_POST['cavalo'];
	$CONETANOL = $_POST['cosEtanol'];
	$CONGASOLINA = $_POST['conGaso'];
	$VLRRESIVAO = $_POST['valRevisao'];
	$VLRSEGURO = $_POST['valSeguro'];

	if(mysqli_stmt_execute($stmt)){
		header('Location: /appPHP');
	}else{
		header('Location: /appPHP');
	}

	mysqli_close($db);
	

?>