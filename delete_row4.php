<?php

require 'conect.php';

$id = $_GET['usuario'];

$eliminar = "DELETE FROM registro WHERE usuario= '$id'";

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