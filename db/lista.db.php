<?php
		include 'conexao.php';

		$SQL = "SELECT * FROM carros WHERE 1 = 1";

		$stmt = mysqli_prepare($db,$SQL);

		mysqli_stmt_execute($stmt);

		mysqli_stmt_bind_result($stmt,$ID,$MARCA,$MODELO,$MOTOR,$ANO,$PRECO,$CAVALO,$CONETANOL,$CONGASOLINA,$VLRRESIVAO,$VLRSEGURO);

		$return = array();
		$i = -1;
		while(mysqli_stmt_fetch($stmt)){
			$i++;
			$return[$i]['id'] = $ID;
			$return[$i]['marca'] = $MARCA;
			$return[$i]['modelo'] = $MODELO;
			$return[$i]['motor'] = $MOTOR;
			$return[$i]['ano'] = $ANO;
			$return[$i]['preco'] = $PRECO;
			$return[$i]['cavalo'] = $CAVALO;
			$return[$i]['conEtanol'] = $CONETANOL;
			$return[$i]['conGasolina'] = $CONGASOLINA;
			$return[$i]['vlrResivao'] = $VLRRESIVAO;
			$return[$i]['vlrSeguro'] = $VLRSEGURO;
		}

?>