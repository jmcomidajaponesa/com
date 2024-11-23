<?php 
   require 'conect.php';   
    
?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>JM Delivery</title>
    </head>
    
<table class="table table-hover" id="dev-table">
        <thead style="background-color:codetblue; text-align:center;">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Asunto</th>
                <th>Mensaje</th>
            </tr>
    </thead>
    <tbody style="text-align:center; background-color:#e6ffff;">
        <?php
            $consult="SELECT * FROM contacto";
            $result=mysqli_query($conect,$consult);
        while($fila=mysqli_fetch_array($result)){
            ?>
        
        <tr>
            <td><?php echo $fila['nombre']?></td>
            <td><?php echo $fila['correo']?></td>
            <td><?php echo $fila['asunto']?></td>
            <td><?php echo $fila['mensaje']?></td>
            <td style="color:green;"> <?php echo $fila['mensaje']?></td>

        </tr>
       <?php  } ?>
        
    </table>
</html>
