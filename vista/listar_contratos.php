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
					<h1 class="text-danger navba-brand"><i>Lista de Contratos</i></h1>
					
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">  
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="text-center text-danger">
							<th scope="col">Nro. de Contrato</th>
							<th scope="col">CI del Titular</th>
							<th scope="col">Plan de Salud</th>
							<th scope="col">Inicio del Contrato</th>
							<th scope="col">Cierre del Contrato</th>
							
						</tr>
					</thead>
					<tbody id="filas_plan">
						<?php 

						foreach ($consulta as $valor) {
							if (isset($valor['nro_contrato'])){
						?>
						<tr id="<?php echo $valor['nro_contrato']?>">
							<th class="text-center"><?php echo $valor['nro_contrato']?></th>
							<td class="text-center"><?php echo $valor['ci_titular']?></td>
							<td class="text-center"><?php echo $valor['id_PlanDeSalud']?></td>
							<td class="text-center"><?php echo $valor['fecha_inicio_contrato']?></td>
							<td class="text-center"><?php echo $valor['fecha_cierre_contrato']?></td>

							<td class="text-center">
								<form action="?pagina=listar_contratos" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['nro_contrato']?>" name="editar"  title="Modificar" onclick="return ConfirmEdit()"><i class="fas fa-pencil-alt"></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['nro_contrato']?>" id="eliminar_plan" title="Eliminar" name="eliminar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt" ></i></button>
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

