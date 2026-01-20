
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin t&iacute;tulo  ccccc  xxx yyyy</title>
  </head>
<body>
  <?php
     include "conexion.php"; 
     $sql="SELECT * FROM usuarios ORDER BY nombre";
     $result=mysqli_query($conexion,$sql);
     echo"<table width=300 border=2>
     <tr>
         <td><b>Nombre</b></td><td><b>Apellido</b></td><td><b>DNI</b></td> <td><b>Enlace</b></td>
     </tr>";



      while($row=mysqli_fetch_row($result)){
        echo"<tr>
             <td>$row[1]</td> <td>$row[2]</td> <td>$row[3] </td>
              <td><a href=\"actualizar.php?id=$row[0]\">Actualizar</a></td>
             </tr>";
      }
     echo"</table>";
     include "cerrar_conexion.php";
 ?>
</body>

</html>
