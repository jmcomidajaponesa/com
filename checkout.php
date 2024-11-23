<?php

header("content-type:text/html;charset-utf-8");
require('conect.php');

$name=$_POST['nombre'];
$lname=$_POST['apellido'];
$email=$_POST['email'];
$phone=$_POST['tel'];
$add=$_POST['dir'];
$cou=$_POST['pais'];
$city=$_POST['ciu'];
$sta=$_POST['edo'];
$cp=$_POST['cp'];

$insert = "INSERT INTO checkout1 (nombre,apellido,email,telefono,direccion,pais,ciudad,estado,cp) VALUES ('$name','$lname','$email','$phone','$add','$cou','$city','$sta','$cp')";

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