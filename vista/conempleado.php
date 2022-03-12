<script type="text/javascript"> 
function ConfirmEdit() {
    var resultado = window.confirm('¿Desea editar la entrada seleccionada?');
    if (resultado === true) {
        return true;
    } else { 
        return false;
    }
} 

window.onload = () => {
    let mensaje = <?php echo (isset($mensaje)) ? '"'.$mensaje.'"' : "''" ?>;
    if (mensaje !== '') {
        window.alert(mensaje);
    }
}
function ConfirmDelete() {
    var resultado = window.confirm('¿Deseas eliminar la entrada seleccionada?');
    if (resultado === true) {
        return true;
    } else { 
        return false;
    }
} 

window.onload = () => {
    let mensaje = <?php echo (isset($mensaje)) ? '"'.$mensaje.'"' : "''" ?>;
    if (mensaje !== '') {
        window.alert(mensaje);
    }
}
</script>

<div class="container caja">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-light justify-content-between">		
					<h1 class="text-danger navba-brand"><i>Listar Empleados</i></h1>
					
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">  
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="text-center text-danger">
							<th scope="col">CI de Empleado</th>
							<th scope="col">Nombres</th>
							<th scope="col">Primer Apellido</th>
							<th scope="col">Segundo Apellido</th>
							<th scope="col">Telefono</th>
							<th scope="col">Direccion</th>
							<th scope="col">Fecha de nacimiento</th>
							<th scope="col">Cargo</th>
							<th scope="col">Rol de usuario</th>	
							<th scope="col">Usuario</th>
							<th scope="col">Contraseña</th>																											
							
						</tr>
					</thead>
					<tbody id="filas_plan">
						<?php 

						foreach ($consulta as $valor) {
							if (isset($valor['ci_empleado'])){
						?>
						<tr id="<?php echo $valor['ci_empleado']?>">
							<th class="text-center"><?php echo $valor['ci_empleado']?></th>
							<td class="text-center"><?php echo $valor['nombres']?></td>
							<td class="text-center"><?php echo $valor['apellido1']?></td>
							<td class="text-center"><?php echo $valor['apellido2']?></td>
							<td class="text-center"><?php echo $valor['telefono']?></td>
							<td class="text-center"><?php echo $valor['direccion']?></td>
							<td class="text-center"><?php echo $valor['fecha_de_nacimiento']?></td>
							<td class="text-center"><?php echo $valor['cargo']?></td>
							<td class="text-center"><?php echo $valor['rol_usuario']?></td>
							<td class="text-center"><?php echo $valor['usuario']?></td>
							<td class="text-center"><?php echo $valor['contrasena']?></td>





							<td class="text-center">
								<form action="?pagina=conempleado" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['ci_empleado']?>" name="editar"  title="Modificar" onclick="return ConfirmEdit()"><i class="fas fa-pencil-alt" ></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['ci_empleado']?>" id="eliminar_plan" title="Eliminar" name="eliminar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt" ></i></button>
	  							</form >
							</td>
						</tr>
						<?php 
								}
							}
						?>
					</tbody>
					
				</table>
				</div>
			</div>
		</div>
	</div>
</section>
                        <?php include 'vista/pie.php'; ?>
                </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">

