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

	padding: 2px;
	border: 1px solid;
	/*text-align: center; SI QUIERES EL TEXTO CENTRADO USA ESTO Y ELIMINA LA
	CLASE TEXT-CENTER NO SIRVE AQUI*/
}



	</style>
<body>


	<h1 align="center">REPORTES</h1>
	<h2>Reporte de Beneficiarios</h2><br>

	<table align="center" >
		<thead>
			<tr>
								<th scope="col">CI del Beneficiario</th>
				<th scope="col">CI del Afiliado</th>
								<th scope="col">Parentesco</th>
				<th scope="col">Nombres</th>
				<th scope="col">Primer Apellido</th>
				<th scope="col">Segundo Apellido</th>
				<th scope="col">Teléfono</th>
				<th scope="col">Dirección</th>
				<th scope="col">Fecha de Nacimiento</th>


			</tr>
		</thead>
		<tbody>
			<?php

				foreach ($consulta as $valor) {
					if (isset($valor['ci_beneficiarios'])){
			?>
				<tr>
										<th class="text-center"><?php echo $valor['ci_beneficiarios']?></th>
					<th class="text-center"><?php echo $valor['ci_titular']?></th>
										<th class="text-center"><?php echo $valor['parentesco']?></th>
					<td class="text-center"><?php echo $valor['nombres']?></td>
					<td class="text-center"><?php echo $valor['apellido1']?></td>
					<td class="text-center"><?php echo $valor['apellido2']?></td>
					<td class="text-center"><?php echo $valor['telefono']?></td>
										<th class="text-center"><?php echo $valor['direccion']?></th>
					<td class="text-center"><?php echo $valor['fecha_de_nacimiento']?></td>


				</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>


</body>
</html>
