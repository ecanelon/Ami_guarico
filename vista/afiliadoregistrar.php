<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
                                                                                        <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-danger btn-block" href="?pagina=regbeneficiario">Registro de Beneficiarios</a>
                                                    

                                            </div>
            <div class="card shadow-lg border-0 rounded-lg mt-0">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Afiliados</h3></div>
                <div class="card-body">
                    <form action="?pagina=afiliadoregistrar" class="formulario" method= "post"  id="formulario"  onsubmit="return validar()">

                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="row-md-6">
                                <div class="row mb-3">
                                    <div class="form-floating mb-3">
                                            <div class="form-floating mb-3 mb-md-9">
                                              <input type="text" class="form-control" name="ci_titular"id="inputFirstName" required />
                                              <label for="inputFirstName">CI titular</label>
                                          </div>
                                    </div>

                                <div class="col-md-6">  
                                    <div class="form-floating mb-3 mb-md-9">
                                        <input type="text"  class="form-control" name="nombres" id="inputFirstName"  required/>
                                        <label for="inputFirstName">Nombres</label>
                                     </div>
                                </div>
                            


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" id="inputFirstName" name="apellido1" type="text" required />
                                    <label for="inputFirstName">Primer Apellido</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="apellido2" id="inputLastName" type="text" required />
                                    <label for="inputLastName">Segundo Apellido</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="telefono" id="inputLastName" type="text" required />
                                    <label for="inputLastName">telefono</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-9">
                                    <input class="form-control" name="direccion" id="inputLastName" type="text" required />
                                    <label for="inputLastName">direccion</label>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" name="fecha_nacimiento" id="inputLastName" type="date" required />
                                    <label for="inputLastName">Fecha de nacimiento</label>
                                </div>
                            </div>  

                            </div>                          

                        </div>
                    </div>
                    


                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=inicio">Cancelar</a>
                        <button type="reset" class="btn btn-danger mr-2">Borrar</button>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="btnguardar">Guardar</button>
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

