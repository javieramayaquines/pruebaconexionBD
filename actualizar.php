<?php
   include "conexion.php";
   extract ($_GET);
   extract($_POST);
   if (!isset($accion)){
   $sql="SELECT * FROM usuarios WHERE id=$id";
   $result=mysqli_query($conexion,$sql);
   $row=mysqli_fetch_row($result);

   echo "<html>
           <head><title>Actualizar datos de la base</title></head>
           <body>
           <form action=\"actualizar.php?accion=guardar\"method=\"POST\">
           Nombre:<br>
               <input type=\"text\" value=\"$row[1]\" name=\"nombre\"><br>
           Apellido:<br>
               <input type=\"text\" value=\"$row[2]\"name=\"apellido\"><br>
           DNI:<br>
               <input type=\"text\" value=\"$row[3]\" name=\"dni\"><br>
               <input type=\"hidden\" name=\"id\" value=\"$row[0]\">
               <input type=\"submit\" name=\"accion\" value=\"guardar\">
           </form>
           </body>
           </html>";


    }  elseif($accion=="guardar"){
           include"conexion.php";
           $sql="UPDATE usuarios SET nombre='".$nombre."', 
           apellido='".$apellido."', dni='".$dni."' WHERE id =".$id;
           $result=mysqli_query($conexion,$sql);
           echo"
              <html>
              <body>
              <h3>Los registros han sido actualizados</h3>
              </body>
              </html>";
            header('Location: ver.php');
       }
    
    include "cerrar_conexion.php";
?>