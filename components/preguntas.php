<div class="container-fluid">

          <div class="col-sm-12 col-md-12  w-100 text-center ">
                    <div class="py-3 ">
  <div class="container ">
      
    <h2 class="display-4 text-center font-weight-bolder ">Califícanos</h2>
  <img src="./img/menos.png" alt="">
      <h4 style="color:darksalmon;">Para nosotros como compañía, es importante saber tu opinión para así poder seguir creciendo ,mejorando y ayudando  continuamente a clientes como tú. Te invitamos a contestar las siguientes preguntas. </h4>
<img src="./img/clientes.png" alt="">
  </div>
</div>
    
  </div>
<div class=" container text-center my-3" >
   

  <form action="./util/enviar.php" method="POST" onsubmit="return validar();">
     <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 1-. ¿Llegó a tiempo el personal?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaUno" name="PreguntaUno" placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 2-. ¿El equipo  So´s se presentó o saludo al llegar ?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaDos" name="PreguntaDos"placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 3-. ¿Instalaron o dieron respuesta rápida en el servicio o producto de su elección?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaTres" name="PreguntaTres" placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 4-. ¿Le agrado el producto o servicio adquirido?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaCuatro" name="PreguntaCuatro" placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 5-. ¿Estaba limpio, bien instalado y en perfectas condiciones el producto o servicio?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaCinco" name="PreguntaCinco" placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 6-. ¿La decoración o servicio y fue lo que esperaba?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaSeis" name="PreguntaSeis"placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 7-. ¿Le agrado el trato del personal?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaSiete" name="PreguntaSiete"  placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 8-. ¿Le dieron a mostraron el contrato previo del servicio adquirido?</h3>
        <input class="text-center " style="background-color: transparent; outline: none;border: none;font-size: 20px;text-decoration: none;" type="text" id="PreguntaOcho" name="PreguntaOcho" placeholder="Escribe Si/No" >
    </div>
  <div class="my-2">
         <h3 style="font-size: 29px; background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(233,220,148,1) 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" class="mt-3  mr-2" > 9-. Podría decirnos la puntuación del producto o servicio adquirido?</h3>
        <select id="PreguntaNueve" name="PreguntaNueve" style="background-color: transparent; outline: none;border: none;font-size: 18px;text-decoration: none;" >
   <option value="Defaul">Esocge una opcion:</option>
  <option value="Excelente">Excelente</option>
  <option value="Muy Bien">Muy Bien</option>
  <option value="Bien">Bien</option>
  <option value="Regular">Regular</option>
   <option value="Mal">Mal</option>
</select>
        
      
    </div>
    
    

    
    <button   class="button2 my-5" type="submit">Enviar Encuesta</button>
  </form>
</div>



 


   </div>