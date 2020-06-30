<?php
    function contador()
    {
        $archivo = "contador.txt"; //el archivo que contiene en numero
        $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
        return $contador;
    }

    $visitantes = contador();
    
?>
<?php include "components/head.php" ?>

<body>

  <!-- Start your project here-->  



<?php include "components/botones.php"; ?>

 
    <?php include "components/navbar.php"; ?>

     <?php include "components/header.php"; ?>

    <?php include "components/sobreNosotros.php"; ?>

     <?php include "carrusel/promociones.php"; ?>

    <?php include "components/services.php"; ?>

   
     <?php include "components/contacto.php"; ?>


    <?php include "components/footer.php"; ?>











  <!-- End your project here-->

  <!-- jQuery -->
  <script src="js/jquery-3.4.1.slim.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
   <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
   <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'cube',
      grabCursor: true,
      cubeEffect: {
        shadow: true,
        slideShadows: true,
        shadowOffset: 20,
        shadowScale: 0.94,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>
</html>
