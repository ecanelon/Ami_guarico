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
	<h2>Reporte de Titulares</h2><br>

	<table align="center" >
		<thead>
			<tr>
				<th scope="col">Cedula</th>
				<th scope="col">Nombre</th>
				<th scope="col">Primer apellido</th>
				<th scope="col">Segundo apellido</th>
				<th scope="col">Telefono</th>
				<th scope="col">Dirección</th>
				<th scope="col">Fecha de nacimiento</th>

			</tr>
		</thead>
		<tbody>
			<?php

				foreach ($consulta as $valor) {
					if (isset($valor['ci_titular'])){
			?>
				<tr>
					<th class="text-center"><?php echo $valor['ci_titular']?></th>
					<td class="text-center"><?php echo $valor['nombres']?></td>
					<td class="text-center"><?php echo $valor['apellido1']?></td>
					<td class="text-center"><?php echo $valor['apellido2']?></td>
					<td class="text-center"><?php echo $valor['telefono']?></td>
					<td class="text-center"><?php echo $valor['direccion']?></td>
					<td class="text-center"><?php echo $valor['fecha_nacimiento']?></td>

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
