<?php
		include 'conexao.php';

		function buscarCarro($var,$datab){
			
			$SQL = 'SELECT * FROM carros where id =?';

			$stmt = mysqli_prepare($datab,$SQL);

			mysqli_stmt_bind_param($stmt,'i',$idcar);

			$idcar = $var;

			mysqli_stmt_execute($stmt);

			mysqli_stmt_bind_result($stmt,$ID,$MARCA,$MODELO,$MOTOR,$ANO,$PRECO,$CAVALO,$CONETANOL,$CONGASOLINA,$VLRRESIVAO,$VLRSEGURO);

			$car = array();
			while(mysqli_stmt_fetch($stmt)){
				$car['id'] = $ID;
				$car['marca'] = $MARCA;
				$car['modelo'] = $MODELO;
				$car['motor'] = $MOTOR;
				$car['ano'] = $ANO;
				$car['preco'] = $PRECO;
				$car['cavalo'] = $CAVALO;
				$car['conEtanol'] = $CONETANOL;
				$car['conGasolina'] = $CONGASOLINA;
				$car['vlrResivao'] = $VLRRESIVAO;
				$car['vlrSeguro'] = $VLRSEGURO;
			}
			return $car;
		}

		//print_r(buscarCarro(2,$db));

		

?>