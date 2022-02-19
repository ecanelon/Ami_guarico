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
							<th scope="col">Id_Servicio</th>
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
							<th class="text-center"><?php echo $valor['id_servicio']?></th>
							<td class="text-center"><?php echo $valor['nombre']?></td>
							<td class="text-center"><?php echo $valor['detalles']?></td>

							<td class="text-center">
								<form action="?pagina=listar_servicio" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['id_servicio']?>" name="editar"  title="Modificar"><i class="fas fa-pencil-alt"></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['id_servicio']?>" id="eliminar_servicio" title="Eliminar" name="eliminar"><i class="fas fa-trash-alt" ></i></button>
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
