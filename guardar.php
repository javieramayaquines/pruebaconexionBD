<html>
<head><title>Guardar datos en la base</title></head>
<body>
<h3>Guardar datos en la base</h3>
<?php
   include "conexion.php";
   extract($_GET);
   if (!isset($accion)){
?>


  <form name="form1" method="get" action="guardar.php">
     <p>Nombre:<br>
        <input type="text" name="nombre">
     </p>
     <p>Apellido:<br>
        <input type="text" name="apellido">
     </p>
     <p>DNI:<br>
        <input type="text" name="dni">
     </p>
     <p>
       <input type="submit" name="accion" value="guardar">
    </p>
  </form>



<?php
  }elseif($accion=="guardar"){
     include"conexion.php";
     extract($_POST);
     $sql="INSERT INTO usuarios  (nombre, apellido, dni)  
     VALUES ('".$nombre."','".$apellido."','".$dni."')";

      echo $sql;

     $result=mysqli_query($conexion,$sql);
    echo "<html>
           <head></head>
          <body>
          <h3>Los datos han sido guardados</h3>
         </body>
      </html>";
   }
  include "cerrar_conexion.php";
?>
</body>
</html>