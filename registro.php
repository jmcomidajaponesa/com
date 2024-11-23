<?php

require('conect.php');

$user=$_POST['user'];
$passw=$_POST['pass'];
$email=$_POST['email'];
$tel=$_POST['tel'];


$insert="INSERT INTO registro (usuario,correo,contrasena,celular) VALUES ('$user','$email','$passw','$tel')";
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