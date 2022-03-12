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
                                                                                        <div class="mt-4 mb-0">
                                        
            <div class="card shadow-lg border-0 rounded-lg mt-0">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Afiliados</h3></div>
                <div class="card-body">
                    <form action="?pagina=afiliadoregistrar" name="form" class="formulario" method= "post"  id="formulario"  onsubmit="return validar()">

                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="row-md-6">
                                <div class="row mb-3">
                                    <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-9">
                                              <input type="text" class="form-control" name="ci_titular" id="cititul"  />
                                              <label for="inputFirstName">CI titular</label>
                                                         <span id="citit"></span>
                                          </div>
                                    </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-9">
                                        <input type="text"  class="form-control" name="nombres" id="nom"  />
                                        <label for="inputFirstName">Nombres</label>
                                          <span id="noma"></span>
                                     </div>
                                </div>



                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="apellido1" id="apel" type="text"  />
                                    <label for="inputFirstName">Primer Apellido</label>
                                     <span id="apela"></span>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="apellido2" type="text"/>
                                    <label for="inputLastName">Segundo Apellido</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="telefono" id="telf" type="text"  />
                                    <label for="inputLastName">Teléfono</label>
                                     <span id="telfa"></span>

                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="direccion" id="dire" type="text"  />
                                    <label for="inputLastName">Dirección</label>
                                    <span id="direa"></span>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" type="date" required />
                                    <label for="inputLastName">Fecha de nacimiento</label>
                                </div>
                            </div>

                            </div>

                        </div>
                    </div>



                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=inicio" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="reset" class="btn btn-danger mr-2" onclick="return ConfirmLimpiar()">Borrar</button>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="btnguardar" onclick="return ConfirmEnviar()" >Guardar</button>
                    </div>
                        <script type="text/javascript" src="assets/js/validarafiliado.js"></script>

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
