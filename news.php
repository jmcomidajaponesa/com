<?php

require('conect.php');

$name=$_POST['nam'];
$email=$_POST['em'];


$insert="INSERT INTO newsletter (nombre,correo) VALUES ('$name','$email')";
$result=mysqli_query($conect,$insert);

echo 'Insercion correcta';

    if (!$result){
        echo '<script>
        alert ("Error de registro");
        windows.history.go(-1);
        </scrpt>';
    }
    else{
        echo'<script>
        alecrt ("Registro existoso\n");
        window.history.go(-1);
        </script>';
    }


?>