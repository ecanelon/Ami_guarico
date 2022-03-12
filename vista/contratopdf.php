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

	padding: 20px;
	border: 1px solid;
	/*text-align: center; SI QUIERES EL TEXTO CENTRADO USA ESTO Y ELIMINA LA
	CLASE TEXT-CENTER NO SIRVE AQUI*/
}



	</style>
<body>


	<h1 align="center">REPORTES</h1>
	<h2>Reporte de Contratos</h2><br>

	<table align="center" >
		<thead>
			<tr>
				<th scope="col">No. de Contrato</th>
				<th scope="col">CI de Titular</th>
				<th scope="col">ID Plan de Salud</th>
				<th scope="col">Fecha de Inicio de Contrato</th>
				<th scope="col">Fecha de Cierre de Contrato</th>

			</tr>
		</thead>
		<tbody>
			<?php

				foreach ($consulta as $valor) {
					if (isset($valor['nro_contrato'])){
			?>
				<tr>
					<th class="text-center"><?php echo $valor['nro_contrato']?></th>
					<td class="text-center"><?php echo $valor['ci_titular']?></td>
					<td class="text-center"><?php echo $valor['id_PlanDeSalud']?></td>
					<td class="text-center"><?php echo $valor['fecha_inicio_contrato']?></td>
					<td class="text-center"><?php echo $valor['fecha_cierre_contrato']?></td>

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
