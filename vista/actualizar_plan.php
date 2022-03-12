<script type="text/javascript">
function ConfirmRegresar() {
    var resultado = window.confirm('¿Desea cancelar el proceso y regresar al listado anterior?');
    if (resultado === true) {
        return true;
    } else {
        return false;
    }
}



function ConfirmEnviar() {
    var resultado = window.confirm('¿Desea registrar los datos ingresados?');
    if (resultado === true) {
        return true;
    } else {
        return false;
    }
}


</script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar  Plan</h3></div>
                <div class="card-body">
                <form action="?pagina=listar_plan" class="formulario" onsubmit="return validar()" method= "post" name="form" id="formulario">
                    <input type="hidden" name="id_plan" id="idnum"  value="<?php echo $plan['id_PlanDeSalud']; ?>">
                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                          <div class="col-md-6">
                              <div class="form-floating mb-3 mb-md-0">
                                  <input type="text"  class="form-control" name="id_plan" id="" value="<?php echo $plan['id_PlanDeSalud']; ?>" disabled/>
                                  <label for="inputFirstName">Id plan</label>

                              </div>
                          </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="nombre" id="nombreAN" value="<?php echo $plan['nombre']; ?>" required/>
                                    <label for="inputFirstName">Nombre</label>
                                        <span id="alfanum"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="precioPlan" name="precio" type="text"  value="<?php echo $plan['precio']; ?>"required/>
                                    <label for="inputFirstName">Precio</label>
                                    <span id="plan"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input class="form-control" name="ncuotas" id="numCuotas" type="text"  value="<?php echo $plan['nro_cuotas']; ?>"required/>
                                    <label for="inputLastName">Número de cuotas</label>
                                    <span id="cuotas"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=listar_plan" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar" onclick="return ConfirmEnviar()">Guardar</button>
                    </div>
                          <script type="text/javascript" src="assets/js/validarplanes.js"></script>
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
