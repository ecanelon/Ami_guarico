<?php

if (isset($consulta)){
             if(!empty($consulta)){
                 $impr = '';

                 foreach ($consulta as $valor){
                     if (isset($valor['id_plandesalud'])){
                       $impr = '

<div class="container">
                       <div class="row justify-content-center">
                           <div class="col-lg-10">
                               <div class="card shadow-lg border-0 rounded-lg mt-5">
                                   <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Planes</h3></div>
                                   <div class="card-body">
                                     <form action="?pagina=planModificar" class="formulario" method= "post"  id="formulario">
                                               <div class="form-floating mb-3">
                                               <input type="text" class="form-control" name="id_plandesalud"id="id_plandesalud"   value ="'.$valor['id_plandesalud'].'">
                                               <label for="inputEmail">Numero de contrato a modificar</label>
                                           </div>
                                           <div class="row mb-3">
                                               <div class="col-md-6">
                                                   <div class="form-floating mb-3 mb-md-0">
                                                       <input type="text"  class="form-control" name="nombre" id="inputFirstName"  placeholder="Enter your first name" value ="'.$valor['nombre'].'"/>
                                                       <label for="inputFirstName">Nombre</label>
                                                   </div>
                                               </div>

                                               <div class="col-md-6">
                                                   <div class="form-floating mb-3 mb-md-3">
                                                       <input class="form-control" id="inputFirstName" name="precio" type="text" placeholder="Enter your first name" value ="'.$valor['precio'].'" />
                                                       <label for="inputFirstName">Precio</label>
                                                   </div>
                                               </div>

                                               <div class="col-md-6">
                                                   <div class="form-floating">
                                                       <input class="form-control" name="ncuotas" id="ncuotas" type="text" placeholder="Enter your last name" value ="'.$valor['ncuotas'].'" />
                                                       <label for="inputLastName">Número de cuotas</label>
                                                   </div>
                                               </div>

                                               </div>
                                           </div>



                                           <div class="mt-4 mb-0">
                                               <button type="submit" class="formulario__btn">Registrar</button>
                                           </div>
                                           <script type="text/javascript" src="function.js"></script>
                                       </form>
                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>
               </main>
       <footer class="py-4 bg-light mt-auto">
           <div class="container-fluid px-4">';
      }
    }
    if($impr!=""){
          print $impr;}

                              }
                            }
                            ?>
                            <br><br>
                            <h3>Productos Registrados</h3><br>
                            <table class="tablita">
                                         <tr>
                                           <th>Rif</th>
                                           <th>Nombre</th>
                                           <th>correo</th>
                                           <th>telefono</th>


                                         </tr>

                <?php foreach($planes as $plan){ ?>



                                         <tr>
                                           <td><?php echo $plan['id_plandesalud'] ?></td>
                                           <td><?php echo $plan['nombre']?></td>
                                           <td><?php echo $plan['precio']?></td>
                                           <td><?php echo $plan['ncuotas']?></td>


                                           <td><a class="btn btn-danger" href="<?php echo "controlador/producto_eliminar.php?id_producto=" .$producto['id_producto']?>"><i class="fa fa-trash"></i></a>

                                         </tr>




                                  <?php } ?>
