
   <?php



   ?>

   <script type="text/javascript"> 

   function ConfirmDelete() {
        
var resultado = window.confirm('¿Estás seguro que deseas eliminar el registro seleccionado?');
if (resultado === true) {
    return true;
} else { 
    return false;
}
    } 

   </script>

<div class="container caja">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-light justify-content-between">		
					<h1 class="text-danger navba-brand"><i>Lista Beneficiarios</i></h1>
					
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">  
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="text-center text-danger">
							<th scope="col">CI de Beneficiario</th>
							<th scope="col">CI de Titular</th>
							<th scope="col">Parentesco</th>
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
							if (isset($valor['ci_beneficiarios'])){
						?>
						<tr id="<?php echo $valor['ci_beneficiarios']?>">
							<th class="text-center"><?php echo $valor['ci_beneficiarios']?></th>
							<th class="text-center"><?php echo $valor['ci_titular']?></th>
							<th class="text-center"><?php echo $valor['parentesco']?></th>
							<td class="text-center"><?php echo $valor['nombres']?></td>
							<td class="text-center"><?php echo $valor['apellido1']?></td>
							<td class="text-center"><?php echo $valor['apellido2']?></td>
							<td class="text-center"><?php echo $valor['telefono']?></td>
							<td class="text-center"><?php echo $valor['direccion']?></td>
							<td class="text-center"><?php echo $valor['fecha_de_nacimiento']?></td>

							<td class="text-center">
								<form action="?pagina=listar_beneficiario" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['ci_beneficiarios']?>" name="editar"  title="Modificar"><i class="fas fa-pencil-alt"></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['ci_beneficiarios']?>" id="eliminar_plan" title="Eliminar" name="eliminar" onclick="return ConfirmDelete()" ><i class="fas fa-trash-alt" ></i></button>
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

