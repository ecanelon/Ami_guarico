<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar  Afiliado</h3></div>
                <div class="card-body">
                <form action="?pagina=listar_afiliado" class="formulario" method= "post"  id="formulario">
                    <input type="hidden" name="ci_titular" value="<?php echo $afili['ci_titular']; ?>">
                    <div class="form-floating mb-3">
                        

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="ci_titular" value="<?php echo $afili['ci_titular']; ?>" id="inputFirstName" disabled/>
                                    <label for="inputFirstName">CI Titular</label>
                                </div>
                            </div>
                     
                            

                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input type="text"  class="form-control" name="nombres" id="inputFirstName" value="<?php echo $afili['nombres']; ?>"/>
                                    <label for="inputFirstName">Nombre</label>
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="inputFirstName" name="apellido1" type="text"  value="<?php echo $afili['apellido1']; ?>">
                                    <label for="inputFirstName">Primer Apellido</label>
                                </div>
                            </div>
                           
                            
                            <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="apellido2" id="inputLastName" type="text"  value="<?php echo $afili['apellido2']; ?>">
                                    <label for="inputLastName">Segundo Apellido</label>
                                </div>
                            </div>

                                                        <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="telefono" id="inputLastName" type="text"  value="<?php echo $afili['telefono']; ?>">
                                    <label for="inputLastName">Telefono</label>
                                </div>
                            </div>

                                                        <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="direccion" id="inputLastName" type="text"  value="<?php echo $afili['direccion']; ?>">
                                    <label for="inputLastName">Dirección</label>
                                </div>
                            </div>

                                                        <div class="col-md-6">
                                <div class="form-floating mb-md-3 ">
                                    <input class="form-control" name="fecha_nacimiento" id="inputLastName" type="date"  value="<?php echo $afili['fecha_nacimiento']; ?>">
                                    <label for="inputLastName">Fecha de Nacimiento</label>
                                </div>
                            </div>
                        




                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=inicio">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar">Guardar</button>
                    </div>
                          <script type="text/javascript" src="validar.js"></script>
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

