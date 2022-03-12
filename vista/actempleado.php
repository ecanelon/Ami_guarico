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
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar Empleado</h3></div>
                <div class="card-body">
                <form action="?pagina=conempleado" class="formulario" method= "post"  id="formulario" name="form" onsubmit="return validar()">
                    <input type="hidden" name="ci_empleado" id="ciempleado" value="<?php echo $empl['ci_empleado']; ?>">
                    <div class="form-floating mb-3">
                        

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="ci_empleado" value="<?php echo $empl['ci_empleado']; ?>" id="inputFirstName" disabled/>
                                    <label for="inputFirstName">CI Titular</label>
                                </div>
                            </div>
                     
                            

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="nombres"  id="nom" value="<?php echo $empl['nombres']; ?>" required/>
                                    <label for="inputFirstName">Nombre</label>
                                            <span id="noma"></span> 
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="apel" name="apellido1" type="text"  value="<?php echo $empl['apellido1']; ?>" required>
                                    <label for="inputFirstName">Primer Apellido</label>
                                    <span id="apela"></span>
                                </div>
                            </div>
                           
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="apellido2" id="inputLastName" type="text"  value="<?php echo $empl['apellido2']; ?>" >
                                    <label for="inputLastName">Segundo Apellido</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="telefono" id="telf" type="text"  value="<?php echo $empl['telefono']; ?>" required>
                                    <label for="inputLastName">Telefono</label>
                                    <span id="telfa"></span>  
                                </div>
                            </div>

                                                        <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="direccion" id="dire" type="text"  value="<?php echo $empl['direccion']; ?>" required>
                                    <label for="inputLastName">Dirección</label>
                                                                         <span id="direa"></span>   
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento" type="date"  value="<?php echo $empl['fecha_de_nacimiento']; ?>" required>
                                    <label for="inputLastName">Fecha de Nacimiento</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cargo">Seleccione Cargo</label>

                                <select id="cargo" name="cargo" class="form-control mb-3 mb-md-0" required>
                                <option value="<?php echo  $empl['cargo']; ?>" disabled selected><?php echo  $empl['cargo']; ?></option>
                                    <option value="Médico">Médico</option>
                                    <option value="Secretario">Secretario</option>
                                    <option value="Enfermera">Enfermera</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="rol_usuario">Seleccione Rol</label>

                                <select id="rol_usuario" name="rol_usuario" class="form-control mb-3 mb-md-9"  required>
                                <option value="<?php echo $empl['rol_usuario']; ?>" disabled selected><?php echo $empl['rol_usuario']; ?></option>
                                    <option>Administrador</option>
                                    <option>Secretario</option>
                                    <option>Cliente</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="usuario" id="user" value="<?php echo $empl['usuario']; ?>" type="text" required />
                                    <label for="inputLastName">Nombre de Usuario</label>
                                      <span id="usera"></span>  
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="contrasena" id="pass" type="password" value="<?php echo $empl['contrasena']; ?>" required />
                                    <label for="inputLastName">Contraseña</label>
                                                                        <span id="passa"></span>  
                                </div>
                            </div>
                        





                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=conempleado" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar" onclick="return ConfirmEnviar()">Guardar</button>
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

