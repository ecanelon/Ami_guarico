<!DOCTYPE html>
<html>
<head>
</head>
	<style type="text/css">

h2 {

  text-align: center;
  color:  #EB1A1A;

}

th{

	color:  #EB1A1A;

}
td, th{

	padding: 21px;
	border: 1px solid;
	/*text-align: center; SI QUIERES EL TEXTO CENTRADO USA ESTO Y ELIMINA LA
	CLASE TEXT-CENTER NO SIRVE AQUI*/
}



	</style>
<body>


	<h1 align="center">REPORTES</h1>
	<h2>Reporte de Pagos</h2><br>

	<table align="center" >
		<thead>
			<tr>
				<th scope="col">ID de Pago</th>
				<th scope="col">ID de Contrato</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Descripción</th>
				<th scope="col">Fecha de Pago</th>
			</tr>
		</thead>
		<tbody>
			<?php

				foreach ($consulta as $valor) {
					if (isset($valor['id_pago'])){
			?>
				<tr>
					<th class="text-center"><?php echo $valor['id_pago']?></th>
					<td class="text-center"><?php echo $valor['id_contrato']?></td>
					<td class="text-center"><?php echo $valor['cantidad']?></td>
					<td class="text-center"><?php echo $valor['descripcion']?></td>
					<td class="text-center"><?php echo $valor['fecha_pago']?></td>

				</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
<!--------------------</div> ERROR-------------------->

</body>
</html>
