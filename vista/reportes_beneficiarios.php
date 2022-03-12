

<div class="container caja">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-light justify-content-between">
					<h1 class="text-danger navba-brand"><i>Sección de Reportes</i></h1>
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
							<th scope="col">Si desea generar reportes de los beneficiarios registrados:</th>
              <th scope="col">
              <form action="?pagina=reportes_beneficiarios" target="_blank" method="post">
        <button class="btn btn-danger" name="entrada">Generar Reporte</button>
      </form></th>


						</tr>
					</thead>
					<tbody id="filas_plan">






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

