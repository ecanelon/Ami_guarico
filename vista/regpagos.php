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


<?php
// Verificamos la conexión con el servidor y la base de datos
  $mysqli = new mysqli('localhost', 'root', '', 'guarico1');
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow-lg border-0 rounded-lg mt-0">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Pagos</h3></div>
                <div class="card-body">
                    <form action="?pagina=regpagos" name="form" class="formulario" method= "post"  id="formulario"  onsubmit="return validar()">

                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="row-md-6">
                                <div class="row mb-3">

                                    <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-9">
                                              <input type="text" class="form-control" name="id_pago" id="idpago"  />
                                              <label for="inputFirstName">ID de Pago</label>
                                              <span id="idpagoa"></span>
                                          </div>
                                    </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-9">
                                    <select class="form-control" name="id_contrato" id="idcont">
                                                <option value="0">Seleccione Contrato:</option>
                                                <?php
                                                $query = $mysqli->query("SELECT * FROM contrato");

                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="'.$valores[nro_contrato].'">'.$valores[nro_contrato].'</option>';
                                                }
                                                ?>
                                            </select>

                                        <span id="idconta"></span>
                                     </div>
                                </div>



                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" id="cant" name="cantidad" type="text"  />
                                    <label for="inputFirstName">Cantidad</label>
                                    <span id="canta"></span>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="descripcion" id="nombreAN" type="text"  />
                                    <label for="inputLastName">Descripción</label>
                                    <span id="alfanum"></span>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="fecha_pago" id="fecha_pago" type="date" required />
                                    <label for="inputLastName">Fecha de Pago</label>
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
                        <script type="text/javascript" src="assets/js/validarpagos.js"></script>

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
