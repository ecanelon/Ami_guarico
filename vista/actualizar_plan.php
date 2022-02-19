<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar  Plan</h3></div>
                <div class="card-body">
                <form action="?pagina=listar_plan" class="formulario" method= "post"  id="formulario">
                    <input type="hidden" name="id_plan" value="<?php echo $plan['id_PlanDeSalud']; ?>">
                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="id" value="<?php echo $plan['id_PlanDeSalud']; ?>" id="inputFirstName" disabled/>
                                    <label for="inputFirstName">ID Plan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="nombre" id="inputFirstName" value="<?php echo $plan['nombre']; ?>"/>
                                    <label for="inputFirstName">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="inputFirstName" name="precio" type="text"  value="<?php echo $plan['precio']; ?>">
                                    <label for="inputFirstName">Precio</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="ncuotas" id="inputLastName" type="text"  value="<?php echo $plan['nro_cuotas']; ?>">
                                    <label for="inputLastName">Número de cuotas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=menu">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar">Guardar</button>
                    </div>
                          <script type="text/javascript" src="validar.js"></script>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
                        <?php include 'vista/pie.php'; ?>
                </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">

