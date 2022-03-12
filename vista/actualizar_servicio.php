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
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Actualizar servicio</h3></div>
                <div class="card-body">
                <form action="?pagina=listar_servicio" name="form" class="formulario" method= "post"  id="formulario" onsubmit="return validar()">
                    <input type="hidden" name="id_servicio" id="idser" value="<?php echo $servicio['id_servicio']; ?>">
                    <div class="form-floating mb-3">
                        <div class="row mb-3">

                                                        <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input type="text"  class="form-control" name="nombre" id="nombreAN" value="<?php echo $servicio['nombre']; ?>"/>
                                    <label for="inputFirstName">Nombre</label>
                                        <span id="alfanum"></span>  
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-3">
                                    <input class="form-control" id="detall" name="detalles" type="text"  value="<?php echo $servicio['detalles']; ?>">
                                    <label for="inputFirstName">Detalles del servicio</label>
                                    <span id="detalla"></span>   
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-warning text-white mr-2" href="?pagina=listar_servicio" onclick="return ConfirmRegresar()">Cancelar</a>
                        <button type="submit" class="btn btn-success mr-2"  id="btnguardar" name="modificar" onclick="return ConfirmEnviar()">Guardar</button>
                    </div>
                        <script type="text/javascript" src="assets/js/validarservicios.js"></script>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'vista/pie.php'; ?>
</main>
<footer class="py-4 bg-light mt-auto">
<div class="container-fluid px-4">
