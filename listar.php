<?php include './inc/cabecalho.inc.php';
	
	require_once './db/lista.db.php';

 ?>

	 <form action="/appPHP/comparar.php" method="GET">
		<table>
			<thead>
				<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Motor</th>
					<th>Ano</th>
					<th>Comparar</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($return as $carro): ?>
				<tr>
					<td><?php echo $carro['marca'] ?></td>
					<td><?php echo $carro['modelo'] ?></td>
					<td><?php echo $carro['motor'] ?></td>
					<td><?php echo $carro['ano'] ?></td>
					<td>
						<input type="checkbox" id="car<?php echo $carro['id']?>" />
					</td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
		<input type="button" id="submeter" value="Comparar" />
	</form>
	<script type="text/javascript">
		var carro1,carro2;
		var contador = 0;
		$(function(){
			$("#submeter").click(function(){
			<?php foreach ($return as $carro): ?>
				if($("#car<?php echo $carro['id']?>").is(":checked")){
					if(carro1 == undefined){
						carro1=<?php echo $carro['id']?>;
					}else{
						carro2=<?php echo $carro['id']?>;
					}
				}
				<?php endforeach; ?>
			if(contador == 2)
				$(location).attr('href', '/appPHP/comparar.php?car1='+carro1+"&car2="+carro2);
			else
				alert ("selecione 2 carros")
			});
		});
		$(function(){
			$("input:checkbox").change(function(){
				contador = $("input:checkbox:checked").length;
			});
		});

	</script>

<?php include './inc/rodape.inc.php'; ?>