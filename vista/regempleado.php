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
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Empleados</h3></div>
                <div class="card-body">
                    <form action="?pagina=regempleado" name="form" class="formulario" method= "post"  id="formulario"  onsubmit="return validar()">

                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="row-md-6">
                                <div class="row mb-3">
                                    <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-9">
                                              <input type="text" class="form-control" name="ci_empleado" id="ciempleado"  />
                                              <label for="inputFirstName">CI Empleado</label>
                                                <span id="ciempa"></span> 
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
                                    <input class="form-control" id="apel" name="apellido1" type="text"  />
                                    <label for="inputFirstName">Primer Apellido</label>
                                                                            <span id="apela"></span>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="apellido2" id="inputLastName" type="text"/>
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
                                    <input class="form-control" name="fecha_de_nacimiento" id="fecha_nacimiento" type="date" required />
                                    <label for="inputLastName">Fecha de nacimiento</label>
                                </div>
                            </div>  



                            <div class="col-md-6">
                                <label for="cargo">Seleccione Cargo</label>

                                <select id="cargo" name="cargo" class="form-control mb-3 mb-md-0" required>
                                    <option>-------</option>
                                    <option value="Médico">Médico</option>
                                    <option value="Secretario">Secretario</option>
                                    <option value="Enfermera">Enfermera</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="rol_usuario">Seleccione Rol</label>

                                <select id="rol_usuario" name="rol_usuario" class="form-control mb-3 mb-md-9" required>
                                    <option>-------</option>
                                    <option>Administrador</option>
                                    <option>Secretario</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="usuario" id="user" type="text"  />
                                    <label for="inputLastName">Nombre de Usuario</label>
                                                                         <span id="usera"></span>  
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="contrasena" id="pass" type="password"  />
                                    <label for="inputLastName">Contraseña</label>
                                    <span id="passa"></span>  
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
                        <script type="text/javascript" src="assets/js/validarempleado.js"></script>
                        
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

