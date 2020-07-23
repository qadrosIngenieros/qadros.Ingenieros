<!doctype html>

<html>


        <head>

    <meta charset="utf-8">

           <title>Correo_QADROS-INGENIEROS</title>

       </head>

     <body>
             <?php

                $para= 'qadros.ingenieros@gmail.com';


                $Nombre=   $_POST['Nombre'];
                $Correo=   $_POST['Correo'];
                $Teléfono= $_POST['Teléfono'];             
                $mensaje=  $_POST['mensaje'];
                

                


                $header= 'Mensaje Nuevo desde la pagina QadrosIngenieros';
                
                $Mensaje = "   


               Nombre del cliente:  '.$Nombre';
               email:               '.$Correo';
               tel:                 '.$Teléfono';
               mensaje:             ''.$mensaje';
              

               ";   

                
                
               mail($para,$header,utf8_decode($Mensaje)); 


	      echo '<p>Hemos recibido su mensaje correctamente, pronto le contestaremos, gracias<-p>';
             ?>
      

     </body>

<a href='../index.html'></a>

</html>