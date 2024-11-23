<?php
session_start();
require('conect.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $password = $_POST['passw'];

    $conn = new mysqli($server, $user , $pass, $db);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT usuario, contrasena FROM registro WHERE usuario='$username' AND contrasena='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $_SESSION['user'] = $row['usuario'];
        header("Location: cons.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos";
    }

    $conn->close();
}
?>
