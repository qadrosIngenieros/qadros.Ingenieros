<!doctype html>

<html>


        <head>

    <meta charset="utf-8">

           <title>Correo_QADROS-INGENIEROS</title>

       </head>

     <body>
             <?php

                
                $Nombre= $_POST["Nombre"];
                $Correo= $_POST["Correo"];
                $Tel�fono= $_POST["Tel�fono"];
                                
                $mensaje= $_POST["mensaje"];
                

                $para= "qadros.ingenieros@gmail.com";


                $asunto= "Mensaje Nuevo";
                
            $Mensaje = "   


              Nombre del cliente: ".$Nombre."
              email:              ".$Correo."
              tel:               ".$Tel�fono."
              mensaje:            ".$mensaje."
              

              ";   

                
                
               mail($para,$asunto,utf8_decode($Mensaje)); 


	      echo "<p>Hemos recibido su mensaje correctamente, pronto le contestaremos, gracias<-p>";
             ?>
      

     </body>

<a href="../index.html"></a>

</html>