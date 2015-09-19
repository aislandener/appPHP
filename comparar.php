<?php include './inc/cabecalho.inc.php';

	include './db/lista_comparar.db.php';
	
	$car1 = buscarCarro($_GET['car1'],$db);
	$car2 = buscarCarro($_GET['car2'],$db);
		
	$carro1 = $car1['marca']." ".$car1['modelo']." ".$car1['motor']." ".$car1['ano'];
	$carro2 = $car2['marca']." ".$car2['modelo']." ".$car2['motor']." ".$car2['ano'];

 ?>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Modelo</th>
				<th><?php echo $carro1; ?></th>
				<th><?php echo $carro2; ?></th>
			</tr>
		</thead>
		<tbody>
			<tr class="">
				<td>Preço</td>
				<td id="preco1">R$ <?php echo number_format($car1['preco'],2,",","."); ?></td>
				<td id="preco2">R$ <?php echo number_format($car2['preco'],2,",","."); ?></td>
			</tr>
			<tr>
				<td>Cavalo(HP)</td>
				<td id="cavalo1"><?php echo $car1['cavalo']; ?></td>
				<td id="cavalo2"><?php echo $car2['cavalo']; ?></td>
			</tr>
			<tr>
				<td>Consumo Etanol(Km/l)</td>
				<td id="conEtanol1"><?php echo number_format($car1['conEtanol'],3,",","."); ?></td>
				<td id="conEtanol2"><?php echo number_format($car2['conEtanol'],3,",",".");?></td>
			</tr>
			<tr>
				<td>Consumo Gasolina(Km/l)</td>
				<td id="conGasolina1"><?php echo number_format($car1['conGasolina'],3,",",".");?></td>
				<td id="conGasolina2"><?php echo number_format($car2['conGasolina'],3,",","."); ?></td>
			</tr>
			<tr>
				<td>Valor Médio Revisões</td>
				<td id="vlrRevisao1">R$ <?php echo number_format($car1['vlrRevisao'],2,",","."); ?></td>
				<td id="vlrRevisao2">R$ <?php echo number_format($car2['vlrRevisao'],2,",","."); ?></td>
			</tr>
			<tr>
				<td>Valor Médio Seguro</td>
				<td id="vlrSeguro1">R$  <?php echo number_format($car1['vlrSeguro'],2,",","."); ?></td>
				<td id="vlrSeguro2">R$ <?php echo number_format($car2['vlrSeguro'],2,",","."); ?></td>
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
				if(<?php echo $car1['preco'].'<'. $car2['preco']; ?>){
					$("#preco1").addClass("melhor");
					$("#preco2").addClass("pior");
					ponto1++;
				}else{
					$("#preco2").addClass("melhor");
					$("#preco1").addClass("pior");
					ponto2++;
				}


				if(<?php echo $car1['cavalo'].'>'. $car2['cavalo']; ?>){
					$("#cavalo1").addClass("melhor");
					$("#cavalo2").addClass("pior");
					ponto1++;
				}else{
					$("#cavalo2").addClass("melhor");
					$("#cavalo1").addClass("pior");
					ponto2++;
				}


				if(<?php echo $car1['conEtanol'].'>'. $car2['conEtanol']; ?>){
					$("#conEtanol1").addClass("melhor");
					$("#conEtanol2").addClass("pior");
					ponto1++;
				}else{
					$("#conEtanol2").addClass("melhor");
					$("#conEtanol1").addClass("pior");
					ponto2++;
				}


				if(<?php echo $car1['conGasolina'].'>'. $car2['conGasolina']; ?>){
					$("#conGasolina1").addClass("melhor");
					$("#conGasolina2").addClass("pior");
					ponto1++;
				}else{
					$("#conGasolina2").addClass("melhor");
					$("#conGasolina1").addClass("pior");
					ponto2++;
				}


				if(<?php echo $car1['vlrRevisao']." < " . $car2['vlrRevisao']; ?>){
					$("#vlrRevisao1").addClass("melhor");
					$("#vlrRevisao2").addClass("pior");
					ponto1++;
				}else{
					$("#vlrRevisao2").addClass("melhor");
					$("#vlrRevisao1").addClass("pior");
					ponto2++;
				}

				if(<?php echo $car1['vlrSeguro']." < ".$car2['vlrSeguro']; ?>){
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