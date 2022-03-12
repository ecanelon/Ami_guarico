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
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar Contratos</h3></div>
                <div class="card-body">
                <form action="?pagina=listar_contratos" class="formulario" method= "post" name="form"  id="formulario" onsubmit="return validar()">
                    <input type="hidden" name="nro_contrato" id="numcont" value="<?php echo $cont['nro_contrato']; ?>">
                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="id" value="<?php echo $cont['nro_contrato']; ?>" disabled/>
                                    <label for="inputFirstName">Numero de contrato</label>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="ci_titular" id="cititular" value="<?php echo $cont['ci_titular']; ?>" />
                                    <label for="inputFirstName">CI del titular</label>
                                                                          <span id="cititulara"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="idplan" name="id_PlanDeSalud" type="text"  value="<?php echo $cont['id_PlanDeSalud']; ?>" >
                                    <label for="inputFirstName">ID del Plan de Salud</label>
                                                                        <span id="plana"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="fecha_inicio_contrato" id="inputLastName" value="<?php echo $cont['fecha_inicio_contrato']; ?>" type="date" required />
                                    <label for="inputLastName">Fecha de Inicio de Contrato</label>
                                </div>
                            </div>  

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="fecha_cierre_contrato" id="inputLastName" value="<?php echo $cont['fecha_cierre_contrato']; ?>" type="date" required />
                                    <label for="inputLastName">Fecha de Inicio de Contrato</label>
                                </div>
                            </div>  

                            




                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=listar_contratos" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar" onclick="return ConfirmEnviar()">Guardar</button>
                    </div>
                          <script type="text/javascript" src="assets/js/validarcontratos.js"></script>
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

