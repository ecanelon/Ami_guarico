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
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Planes</h3></div>
                <div class="card-body">
                    <form action="?pagina=planregistrar" name="form" class="formulario" method= "post"  id="formulario"  onsubmit="return validar()">

                      <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-9">
                                <input type="hidden" class="form-control" name="id_plan"  placeholder="Enter your first name"/>


                           </div>
                      </div>

                        <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="row-md-6">
                                <div class="row mb-3">



                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-9">
                                        <input type="text"  class="form-control" name="nombre" id="nombreAN"/>
                                        <label for="inputFirstName">Nombre del Plan</label>
                                        <span id="alfanum"></span>
                                     </div>
                                </div>



                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" id="precioPlan" name="precio" type="text"  />
                                    <label for="inputFirstName">Precio</label>
                                    <span id="plan"></span>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="ncuotas" id="numCuotas" type="text"/>
                                    <label for="inputLastName">Cuotas</label>
                                    <span id="cuotas"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                <select  class="form-control select2" name="id_servicio">
                                            <option value="0">Seleccione servicio:</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM servicios");

                                            while ($valores = mysqli_fetch_array($query)) {
                                              echo '<option value="'.$valores[id_servicio].'">'.$valores[id_servicio].'-'.$valores[nombre].'</option>';
                                            }
                                            ?>
                                        </select>

                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                <select  class="form-control select2" name="id_servicio2">
                                            <option value="0">Seleccione servicio:</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM servicios");

                                            while ($valores = mysqli_fetch_array($query)) {
                                              echo '<option value="'.$valores[id_servicio].'">'.$valores[id_servicio].'-'.$valores[nombre].'</option>';
                                            }
                                            ?>
                                        </select>

                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                <select  class="form-control select2" name="id_servicio3">
                                            <option value="0">Seleccione servicio:</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM servicios");

                                            while ($valores = mysqli_fetch_array($query)) {
                                              echo '<option value="'.$valores[id_servicio].'">'.$valores[id_servicio].'-'.$valores[nombre].'</option>';
                                            }
                                            ?>
                                        </select>

                                 </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                <select  class="form-control select2" name="id_servicio4">
                                            <option value="0">Seleccione servicio:</option>
                                            <?php
                                            $query = $mysqli->query("SELECT * FROM servicios");

                                            while ($valores = mysqli_fetch_array($query)) {
                                              echo '<option value="'.$valores[id_servicio].'">'.$valores[id_servicio].'-'.$valores[nombre].'</option>';
                                            }
                                            ?>
                                        </select>

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
