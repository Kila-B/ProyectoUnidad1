<?php
session_start(); // Iniciar la sesión

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores de usuario y contraseña del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar el usuario y la contraseña
    if ($username == 'admin' && $password == 'asd') {


        // Si el usuario y la contraseña son correctos, se inicia una sesión 
        //y se redirige al usuario a la página del administrador
        $_SESSION['username'] = $username;
        header("location: admin.html");
    } 
    
    elseif ($username == 'cliente' && $password == '123') {
        // Si el usuario y la contraseña son correctos, se inicia una sesión
        //y se redirige al usuario a la página del cliente
        $_SESSION['username'] = $username;
        header("location: cliente.html");
    } 
    
    else {
        // Si el usuario y la contraseña no son válidos, se muestra un mensaje de error
        header("location: error.html");
    }
}
?>
