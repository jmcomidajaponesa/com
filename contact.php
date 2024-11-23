<?php

require('conect.php');

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['mess'];



$insert="INSERT INTO contact (nombre,correo,asunto,mensaje) VALUES ('$name','$email','$subject','$message')";
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