 <div class=" py-2">
    <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter1">
        Eliminar Imagenes
    </button>

    <!-- Modal -->
    <form action="" method="post">
        <div class="modal fade bd-example-modal-xl" id="exampleModalCenter1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title" id="exampleModalLongTitle">Eliminar imagen </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class=" naranjaTexto py-2">
                            <h5 class="font-weight-bold ">Inflables y brincolines</h5>
                        <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                    <tr>
                                        
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM brincolin  ;";
                                    $result=mysqli_query($conn,$consulta);
                                    $servicio="brincolin";
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                       

                                        <td> <img class=" text-center py-2 borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                         <div class=" naranjaTexto py-2">
                            <h5 class="font-weight-bold">Velas personalizadas</h5>
                             <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                    <tr>
                                      
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM velas  ;";
                                    $result=mysqli_query($conn,$consulta);
                                      $servicio="velas";
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                        

                                        <td> <img class=" text-center py-2 borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                         <div class=" naranjaTexto py-2">
                            <h5 class="font-weight-bold">Mesas de dulces</h5>
                            <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                    <tr>
                                      
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM mesasdulces  ;";
                                    $result=mysqli_query($conn,$consulta);
                                     $servicio="mesasdulces";
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                        
                                        <td> <img class=" text-center py-2 borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>


                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                         <div class=" naranjaTexto py-2">
                            <h5 class="font-weight-bold">Centros de mesa</h5>
                             <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                    <tr>
                                        
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM mesascentros  ;";
                                    $result=mysqli_query($conn,$consulta);
                                    $servicio="mesascentros";
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                       

                                        <td> <img class=" text-center py-2 borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                         <div class=" naranjaTexto py-2">
                            <h5 class="font-weight-bold">Flores rehidratadas</h5>
                           <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                    <tr>
                                     
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM flores  ;";
                                    $result=mysqli_query($conn,$consulta);
                                  $servicio="flores";
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                       

                                        <td> <img class=" text-center py-2 borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                         <div class=" naranjaTexto py-2">
                            <h5 class="font-weight-bold">Porcelanicron</h5>
                            <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                    <tr>
                                       
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM porcelanicron ;";
                                          $servicio="porcelanicron";
                                           $result=mysqli_query($conn,$consulta);
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                        

                                        <td> <img class=" text-center py-2 borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white" onclick="return confirmarDc();" ><i class="fas fa-trash-alt"></i></a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                         <div class=" naranjaTexto py-2">
                            <h5 class="font-weight-bold">Promociones</h5>
                           <table class="table table-hover table-bordered">
                             <thead class="thead-dark">
                                    <tr>
                                     
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM promociones  ;";
                                    $result=mysqli_query($conn,$consulta);
                                  $servicio="promociones";
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                       

                                        <td> <img class=" text-center py-2 borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white"><i class="fas fa-trash-alt"></i></a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>

                    </div>







                </div>
               
            </div>
        </div>
    </form>
</div>

 <script >
 function confirmarDc()
{
	if(confirm('Estas apunto de eliminar esta imagen . ¿Estas seguro ?'))
		return true;
	else
		return false;
}</script>
