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
					<h1 class="text-danger navba-brand"><i>Lista de pagos</i></h1>
					
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">  
				<table class="table table-striped table-bordered">
					<thead>
						<tr class="text-center text-danger">
							<th scope="col">ID del Pago</th>
							<th scope="col">ID del Contrato	</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Descripción</th>
							<th scope="col">F. de Pago</th>
							
						</tr>
					</thead>
					<tbody id="filas_plan">
						<?php 

						foreach ($consulta as $valor) {
							if (isset($valor['id_pago'])){
						?>
						<tr id="<?php echo $valor['id_pago']?>">
							<th class="text-center"><?php echo $valor['id_pago']?></th>
							<td class="text-center"><?php echo $valor['id_contrato']?></td>
							<td class="text-center"><?php echo $valor['cantidad']?></td>
							<td class="text-center"><?php echo $valor['descripcion']?></td>
							<td class="text-center"><?php echo $valor['fecha_pago']?></td>

							<td class="text-center">
								<form action="?pagina=conpagos" method="post">
	  							<button class="btn btn-primary" value="<?php echo $valor['id_pago']?>" name="editar"  title="Modificar" onclick="return ConfirmEdit()"><i class="fas fa-pencil-alt"></i></button>
	  							<button class="btn btn-danger" value="<?php echo $valor['id_pago']?>" id="eliminar_plan" title="Eliminar" name="eliminar" onclick="return ConfirmDelete()"><i class="fas fa-trash-alt" ></i></button>
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

