            <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
  Subir imagenes
</button>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Imagenes para las galerias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="util/validarFoto.php" method="POST" enctype="multipart/form-data" onsubmit="return validar();">
    <div class="text-center  my-2"><h3>Escoge una galeria para mostrar la imagen:</h3>
        <select id="servicio" name="servicio" style="background-color: transparent; outline: none;border: none;font-size: 18px;text-decoration: none;" >
   <option >Escoge una opción:</option>
  <option value="brincolin">Inflables y brincolines</option>
  <option value="velas">Velas Personalizadas</option>
  <option value="mesasdulces">Mesas de dulces</option>
  <option value="mesascentros">Centros de Mesa</option>
   <option value="flores">Flores rehidratadas</option>
   <option value="porcelanicron">Porcelanicron</option>
  
</select></div>
    
       <div class="text-center my-1">
       <h3>Escoge la foto: </h3>
       <div class="row my-1">
        <div class="col-md-4"></div>
       <div class="col-md-4 "> 
          <input type="file" name="image" id="image" class="form-control-file" >

      </div>
       <div class="col-md-4"></div>
       
       </div>
      
       </div>        
         <div class="text-center my-5 "> <input class=" text-center my-1 button2" style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="submit" name="enviar" value="Enviar"></div>
    
       
        </form> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
       
      </div>
    </div>
  </div>
</div>
      