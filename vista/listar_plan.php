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
					<h1 class="text-danger navba-brand"><i>Lista Planes de Salud</i></h1>
					<div class="col-lg-1 mt-2">

				</div>

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
							<th scope="col">Precio</th>
							<th scope="col">Cuotas</th>
              <th scope="col">Servicio</th>
              <th scope="col">Servicio2</th>
              <th scope="col">Servicio3</th>
              <th scope="col">Servicio4</th>

						</tr>
					</thead>
					<tbody id="filas_plan">
						<?php

						foreach ($consulta as $valor) {
							if (isset($valor['id_PlanDeSalud'])){
						?>
						<tr id="<?php echo $valor['id_PlanDeSalud']?>">

							<td class="text-center"><?php echo $valor['nombre']?></td>
							<td class="text-center"><?php echo $valor['precio']?></td>
							<td class="text-center"><?php echo $valor['nro_cuotas']?></td>
              <td style="display:none;"><?php echo $valor['id_servicio']?></td>
            	<td class="text-center"><?php echo $valor['nombreservicio']?></td>
              <td style="display:none;"><?php echo $valor['id_servicio2']?></td>
              <td class="text-center"><?php echo $valor['nombreservicio2']?></td>
              <td style="display:none;"><?php echo $valor['id_servicio3']?></td>
              <td class="text-center"><?php echo $valor['nombreservicio3']?></td>
              <td style="display:none;"><?php echo $valor['id_servicio4']?></td>
              <td class="text-center"><?php echo $valor['nombreservicio4']?></td>
							<td class="text-center">
								<form action="?pagina=listar_plan" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['id_PlanDeSalud']?>" name="editar"  title="Modificar" onclick="return ConfirmEdit()"><i class="fas fa-pencil-alt"></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['id_PlanDeSalud']?>" id="eliminar_plan" title="Eliminar" name="eliminar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt" ></i></button>
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
