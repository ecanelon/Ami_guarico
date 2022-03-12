<script type="text/javascript">
function ConfirmRegresar() {
    var resultado = window.confirm('¿Desea cancelar el proceso y regresar al menú principal?');
    if (resultado === true) {
        return true;
    } else {
        return false;
    }
}

function ConfirmLimpiar() {
    var resultado = window.confirm('¿Desea limpiar los campos?');
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

            <div class="card shadow-lg border-0 rounded-lg mt-0">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Servicios</h3></div>
                <div class="card-body">
                    <form action="?pagina=servicioregistrar" name="form" class="formulario" method= "post"  id="formulario"  onsubmit="return validar()">

                        <input type="hidden" class="form-control" name="id_servicio" />

                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="row-md-6">
                                <div class="row mb-3">



                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-9">
                                        <input type="text"  class="form-control" name="nombre" id="nombreAN"/>
                                        <label for="inputFirstName">Nombre del Servicio</label>
                                        <span id="alfanum"></span>
                                     </div>
                                </div>



                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" id="detall" name="detalles" type="text"/>
                                    <label for="inputFirstName">Detalles del Servicio</label>
                                    <span id="detalla"></span>
                                </div>
                            </div>
                           </div>

                        </div>
                    </div>


                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=inicio" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="reset" class="btn btn-danger mr-2" onclick="return ConfirmLimpiar()">Borrar</button>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="btnguardar" onclick="return ConfirmEnviar()">Guardar</button>
                    </div>
                        <script type="text/javascript" src="assets/js/validarservicios.js"></script>

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
