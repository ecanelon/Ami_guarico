<div class="container caja">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-light justify-content-between">		
					<h1 class="text-danger navba-brand"><i>Lista Afiliados</i></h1>
					
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">  
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="text-center text-danger">
							<th scope="col">CI de Titular</th>
							<th scope="col">Nombres</th>
							<th scope="col">Primer Apellido</th>
							<th scope="col">Segundo Apellido</th>
							<th scope="col">Telefono</th>
							<th scope="col">Direccion</th>
							<th scope="col">Fecha de nacimiento</th>
							
						</tr>
					</thead>
					<tbody id="filas_plan">
						<?php 

						foreach ($consulta as $valor) {
							if (isset($valor['ci_titular'])){
						?>
						<tr id="<?php echo $valor['ci_titular']?>">
							<th class="text-center"><?php echo $valor['ci_titular']?></th>
							<td class="text-center"><?php echo $valor['nombres']?></td>
							<td class="text-center"><?php echo $valor['apellido1']?></td>
							<td class="text-center"><?php echo $valor['apellido2']?></td>
							<td class="text-center"><?php echo $valor['telefono']?></td>
							<td class="text-center"><?php echo $valor['direccion']?></td>
							<td class="text-center"><?php echo $valor['fecha_nacimiento']?></td>

							<td class="text-center">
								<form action="?pagina=listar_afiliado" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['ci_titular']?>" name="editar"  title="Modificar"><i class="fas fa-pencil-alt"></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['ci_titular']?>" id="eliminar_plan" title="Eliminar" name="eliminar"><i class="fas fa-trash-alt" ></i></button>
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

