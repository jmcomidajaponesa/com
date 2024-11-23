<?php

require 'conect.php';

$id = $_GET['nombre'];

$eliminar = "DELETE FROM checkout1 WHERE nombre = '$id'";

$result= mysqli_query($conect, $eliminar);

if(!$result){
    echo' <script>
        alert ("Error al eliminar");
        window.history.go(-1);
        </script>'
        ;
}
else{
    echo' <script>
        alert ("Registro eliminado con exito");
        window.history.go(-1);
        </script>'
        ;
}