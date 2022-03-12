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
	<h2>Reporte de Empleados</h2><br>

	<table align="center" >
		<thead>
			<tr>
				<th scope="col">CI del Empleado</th>
				<th scope="col">Nombres</th>
				<th scope="col">Primer Apellido</th>
				<th scope="col">Segundo Apellido</th>
				<th scope="col">Teléfono</th>
				<th scope="col">Dirección</th>
				<th scope="col">Fecha de Nacimiento</th>
								<th scope="col">Cargo</th>
				<th scope="col">Rol Usuario</th>
				<th scope="col">Usuario</th>
				<th scope="col">Clave</th>

			</tr>
		</thead>
		<tbody>
			<?php

				foreach ($consulta as $valor) {
					if (isset($valor['ci_empleado'])){
			?>
				<tr>
					<th class="text-center"><?php echo $valor['ci_empleado']?></th>
					<td class="text-center"><?php echo $valor['nombres']?></td>
					<td class="text-center"><?php echo $valor['apellido1']?></td>
					<td class="text-center"><?php echo $valor['apellido2']?></td>
					<td class="text-center"><?php echo $valor['telefono']?></td>
										<th class="text-center"><?php echo $valor['direccion']?></th>
					<td class="text-center"><?php echo $valor['fecha_de_nacimiento']?></td>
					<td class="text-center"><?php echo $valor['cargo']?></td>
					<td class="text-center"><?php echo $valor['rol_usuario']?></td>
					<td class="text-center"><?php echo $valor['usuario']?></td>
					<td class="text-center"><?php echo $valor['contrasena']?></td>

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
