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
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar  Afiliado</h3></div>
                <div class="card-body">
                <form action="?pagina=listar_afiliado" class="formulario" method= "post"  name="form" id="formulario" onsubmit="return validar()">
                    <input type="hidden" name="ci_titular" id="cititul" value="<?php echo $afili['ci_titular']; ?>">
                    <div class="form-floating mb-3">
                        

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="ci_titular" value="<?php echo $afili['ci_titular']; ?>"  disabled/>
                                    <label for="inputFirstName">CI Titular</label>
                                </div>
                            </div>
                     
                            

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="nombres" id="nom" value="<?php echo $afili['nombres']; ?>" required/>
                                    <label for="inputFirstName">Nombre</label>
                                          <span id="noma"></span>                                    
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="apel" name="apellido1" type="text"  value="<?php echo $afili['apellido1']; ?>" required>
                                    <label for="inputFirstName">Primer Apellido</label>
                                     <span id="apela"></span>                                    
                                </div>
                            </div>
                           
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="apellido2" id="inputLastName" type="text"  value="<?php echo $afili['apellido2']; ?>" >
                                    <label for="inputLastName">Segundo Apellido</label>
                                </div>
                            </div>

                                                        <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="telefono" id="telf" type="text"  value="<?php echo $afili['telefono']; ?>" required>
                                    <label for="inputLastName">Telefono</label>
                            <span id="telfa"></span>
                                </div>
                            </div>

                                                        <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="direccion" id="dire" type="text"  value="<?php echo $afili['direccion']; ?>" required>
                                    <label for="inputLastName">Dirección</label>
                                    <span id="direa"></span>
                                </div>
                            </div>

                                                        <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="fecha_nacimiento" id="inputLastName" type="date"  value="<?php echo $afili['fecha_nacimiento']; ?>" required>
                                    <label for="inputLastName">Fecha de Nacimiento</label>
                                </div>
                            </div>
                        




                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=listar_afiliado" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar" onclick="return ConfirmEnviar()" >Guardar</button>
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

