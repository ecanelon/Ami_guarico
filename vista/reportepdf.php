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

	padding: 10px;
	border: 1px solid;
	/*text-align: center; SI QUIERES EL TEXTO CENTRADO USA ESTO Y ELIMINA LA
	CLASE TEXT-CENTER NO SIRVE AQUI*/
}



	</style>
<body>


	<h1 align="center">REPORTES</h1>
	<h2>Reporte de Planes</h2><br>

	<table align="center" >
		<thead>
			<tr>

				<th scope="col">Nombre</th>
				<th scope="col">Precio</th>
				<th scope="col">Cuotas</th>
				<th scope="col">Servicio</th>
				<th scope="col">Servicio2</th>
				<th scope="col">Servicio3</th>
				<th scope="col">Servicio4</th>


			</tr>
		</thead>
		<tbody>
			<?php

				foreach ($consulta as $valor) {
					if (isset($valor['id_PlanDeSalud'])){
			?>
				<tr>

					<td class="text-center"><?php echo $valor['nombre']?></td>
					<td class="text-center"><?php echo $valor['precio']?></td>
					<td class="text-center"><?php echo $valor['nro_cuotas']?></td>
					<td class="text-center"><?php echo $valor['nombreservicio']?></td>
					<td class="text-center"><?php echo $valor['nombreservicio2']?></td>
					<td class="text-center"><?php echo $valor['nombreservicio3']?></td>
					<td class="text-center"><?php echo $valor['nombreservicio4']?></td>
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
