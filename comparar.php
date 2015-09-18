<?php include './inc/cabecalho.inc.php';

	include './db/lista_comparar.db.php';
	
	$car1 = buscarCarro($_GET['car1'],$db);
	$car2 = buscarCarro($_GET['car2'],$db);
		
	$carro1 = $car1['marca']." ".$car1['modelo']." ".$car1['motor']." ".$car1['ano'];
	$carro2 = $car2['marca']." ".$car2['modelo']." ".$car2['motor']." ".$car2['ano'];

 ?>
	<table>
		<thead>
			<tr>
				<th>Modelo</th>
				<th id="modelo1"><?php echo $carro1; ?></th>
				<th><?php echo $carro2; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Preço</td>
				<td id="preco1"><?php echo $car1['preco']; ?></td>
				<td id="preco2"><?php echo $car2['preco']; ?></td>
			</tr>
			<tr>
				<td>Cavalo(HP)</td>
				<td id="cavalo1"><?php echo $car1['cavalo']; ?></td>
				<td id="cavalo2"><?php echo $car2['cavalo']; ?></td>
			</tr>
			<tr>
				<td>Consumo Etanol(Km/l)</td>
				<td id="conEtanol1"><?php echo $car1['conEtanol']; ?></td>
				<td id="conEtanol2"><?php echo $car2['conEtanol'];?></td>
			</tr>
			<tr>
				<td>Consumo Gasolina(Km/l)</td>
				<td id="conGasolina1"><?php echo $car1['conGasolina'];?></td>
				<td id="conGasolina2"><?php echo $car2['conGasolina']; ?></td>
			</tr>
			<tr>
				<td>Valor Médio Revisões</td>
				<td id="vlrRevisao1"><?php echo $car1['vlrResivao']; ?></td>
				<td id="vlrRevisao2"><?php echo $car2['vlrResivao']; ?></td>
			</tr>
			<tr>
				<td>Valor Médio Seguro</td>
				<td id="vlrSeguro1"><?php echo $car1['vlrSeguro']; ?></td>
				<td id="vlrSeguro2"><?php echo $car2['vlrSeguro']; ?></td>
			</tr>

			<tr>
				<td>Pontuação Final</td>
				<td id="pontuacao1"></td>
				<td id="pontuacao2"></td>
			</tr>
		</tbody>
	</table>
	<script type="text/javascript">
		$(function($){
				var ponto1 = 0;
				var ponto2 = 0;
				if($("#preco1").html() <= $("#preco2").html()){
					$("#preco1").addClass("melhor");
					$("#preco2").addClass("pior");
					ponto1++;
				}else{
					$("#preco2").addClass("melhor");
					$("#preco1").addClass("pior");
					ponto2++;
				}


				if($("#cavalo1").html() >= $("#cavalo2").html()){
					$("#cavalo1").addClass("melhor");
					$("#cavalo2").addClass("pior");
					ponto1++;
				}else{
					$("#cavalo2").addClass("melhor");
					$("#cavalo1").addClass("pior");
					ponto2++;
				}


				if($("#conEtanol1").html() <= $("#conEtanol2").html()){
					$("#conEtanol1").addClass("melhor");
					$("#conEtanol2").addClass("pior");
					ponto1++;
				}else{
					$("#conEtanol2").addClass("melhor");
					$("#conEtanol1").addClass("pior");
					ponto2++;
				}


				if($("#conGasolina1").html() >= $("#conGasolina2").html()){
					$("#conGasolina1").addClass("melhor");
					$("#conGasolina2").addClass("pior");
					ponto1++;
				}else{
					$("#conGasolina2").addClass("melhor");
					$("#conGasolina1").addClass("pior");
					ponto2++;
				}


				if($("#vlrRevisao1").html() >= $("#vlrRevisao2").html()){
					$("#vlrRevisao1").addClass("melhor");
					$("#vlrRevisao2").addClass("pior");
					ponto1++;
				}else{
					$("#vlrRevisao2").addClass("melhor");
					$("#vlrRevisao1").addClass("pior");
					ponto2++;
				}


				if($("#vlrSeguro1").html() >= $("#vlrSeguro2").html()){
					$("#vlrSeguro1").addClass("melhor");
					$("#vlrSeguro2").addClass("pior");
					ponto1++;
				}else{
					$("#vlrSeguro2").addClass("melhor");
					$("#vlrSeguro1").addClass("pior");
					ponto2++;
				}

				$("#pontuacao1").html(ponto1);
				$("#pontuacao2").html(ponto2);
		});
	</script>

<?php include './inc/rodape.inc.php'; ?>