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
					<h1 class="text-danger navba-brand"><i>Lista Servicios</i></h1>

				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="text-center text-danger">

							<th scope="col">Nombre</th>
							<th scope="col" width="350">Detalles</th>


						</tr>
					</thead>
					<tbody id="filas_servicio">
						<?php

						foreach ($consulta as $valor) {
							if (isset($valor['id_servicio'])){
						?>
						<tr id="<?php echo $valor['id_servicio']?>">

							<td class="text-center"><?php echo $valor['nombre']?></td>
							<td class="text-center"><?php echo $valor['detalles']?></td>

							<td class="text-center">
								<form action="?pagina=listar_servicio" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['id_servicio']?>" name="editar"  title="Modificar" onclick="return ConfirmEdit()"><i class="fas fa-pencil-alt" ></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['id_servicio']?>" id="eliminar_servicio" title="Eliminar" name="eliminar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt" ></i></button>
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
