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
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar pagos</h3></div>
                <div class="card-body">
                <form action="?pagina=conpagos" class="formulario" method= "post" name="form"  id="formulario" onsubmit="return validar()">
                    <input type="hidden" name="id_pago" id="idpago" value="<?php echo $pago['id_pago']; ?>">
                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="id_pago" value="<?php echo $pago['id_pago']; ?>"  disabled/>
                                    <label for="inputFirstName">ID del Pago</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="id_contrato" id="idcont" value="<?php echo $pago['id_contrato']; ?>" required/>
                                    <label for="inputFirstName">ID del Contrato</label>
                                                                            <span id="idconta"></span>   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="cant" name="cantidad" type="text"  value="<?php echo $pago['cantidad']; ?>" required>
                                    <label for="inputFirstName">Cantidad</label>
                                                                        <span id="canta"></span>   
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="descripcion" id="nombreAN" value="<?php echo $pago['descripcion']; ?>" type="text" required />
                                    <label for="inputLastName">Descripción</label>
                                                                        <span id="alfanum"></span>  
                                </div>
                            </div>  

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="fecha_pago" id="inputLastName" value="<?php echo $pago['fecha_pago']; ?>" type="date" required />
                                    <label for="inputLastName">Fecha de Pago</label>
                                </div>
                            </div>  

                            




                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=conpagos" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar" onclick="return ConfirmEnviar()">Guardar</button>
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

