<?php 

$server="localhost";
$user="root";
$pass="";
$db="jm";

$conect = new mysqli($server, $user , $pass, $db);

if ($conect -> connect_errno){
    die ("Error de Conexión\n");
} 
else {
    echo "Conexión Exitosa\n";
}


//$sql = "SELECT ID_user, name, passw FROM users WHERE name='ADMIN' and passw='JM3l12*'";
//$result = $conn->query($sql);
?>
