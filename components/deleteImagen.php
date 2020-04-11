<div>
    <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter1">
        Eliminar Imagenes
    </button>

    <!-- Modal -->
    <form action="" method="post">
        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <h5 class="modal-title" id="exampleModalLongTitle">Imagenes para las galerias</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <h5>Inflables y brincolines</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
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
                                        <th scope=" row">

                                        </th>

                                        <td> <img class=" text-center py-2 zoom borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white">Eliminar</a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                        <div>
                            <h5>Velas personalizadas</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
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
                                        <th scope=" row">

                                        </th>

                                        <td> <img class=" text-center py-2 zoom borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white">Eliminar</a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                        <div>
                            <h5>Mesas de dulces</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
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
                                        <th scope=" row">

                                        </th>

                                        <td> <img class=" text-center py-2 zoom borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white">Eliminar</a>


                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                        <div>
                            <h5>Centros de mesa</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
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
                                        <th scope=" row">

                                        </th>

                                        <td> <img class=" text-center py-2 zoom borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white">Eliminar</a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                        <div>
                            <h5>Flores rehidratadas</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
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
                                        <th scope=" row">

                                        </th>

                                        <td> <img class=" text-center py-2 zoom borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white">Eliminar</a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>
                        <div>
                            <h5>Porcelanicron</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Acción</th>

                                    </tr>
                                </thead>
                                <?php 
                                    include("./util/conexion.php");
                                    $consulta ="SELECT id,ruta FROM porcelanicron ;";
                                          $servicio="porcelanicron";
                                    while( $datos=$result->fetch_assoc()){ ?>
                                <tbody>
                                    <tr>
                                        <th scope=" row">

                                        </th>

                                        <td> <img class=" text-center py-2 zoom borders2"
                                                src="<?php echo $datos['ruta'];?>">
                                        </td>

                                        <td>
                                            <a href="./util/eliminarImagen.php?servicio=<?php echo $servicio?>&id=<?php echo $datos['id']?>"
                                                class="btn btn-danger text-white">Eliminar</a>

                                        </td>
                                        <?php } mysqli_free_result($result);
                                                     mysqli_close($conn);?>


                                    </tr>



                                </tbody>

                            </table>
                        </div>

                    </div>







                </div>
                <div class=" modal-footer ">
                    <button type="button " class="btn btn-secondary " data-dismiss="modal ">Cerrar</button>

                </div>
            </div>
        </div>
    </form>
</div>