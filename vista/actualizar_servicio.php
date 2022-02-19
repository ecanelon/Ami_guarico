<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar  Plan</h3></div>
                <div class="card-body">
                <form action="?pagina=listar_servicio" class="formulario" method= "post"  id="formulario">
                    <input type="hidden" name="id_servicio" value="<?php echo $servicio['id_servicio']; ?>">
                    <div class="form-floating mb-3">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="id" value="<?php echo $servicio['id_servicio']; ?>" id="inputFirstName" disabled/>
                                    <label for="inputFirstName">ID Servicio</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="nombre" id="inputFirstName" value="<?php echo $servicio['nombre']; ?>"/>
                                    <label for="inputFirstName">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="inputFirstName" name="detalles" type="text"  value="<?php echo $servicio['detalles']; ?>">
                                    <label for="inputFirstName">Detalles del servicio</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=menu">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar">Guardar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
