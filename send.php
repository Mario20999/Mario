<?php
include("conexion.php");

if(isset($_POST['send'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ){
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']); // Variable corregida
        $email = trim($_POST['email']); // Variable corregida
        $message = trim($_POST['message']); // Variable corregida
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje)
        VALUES ('$name', '$phone', '$email', '$message')"; // Variables corregidas
        $resultado = mysqli_query($conex, $consulta);
    }
}
?>