<?php
//m3xep6
//08/11/2017
//entrada a la aplicacion
//se va usar la session de la conexion
session_start();

//funcion de autenticacion
include './Functions/Authentication.php';

//si no ha pasado por el login de forma correcta
if (!IsAuthenticated()){
    header('Location:./Controllers/login_controller.php');
}
//si ha pasado por el login de forma correcta 
else{
    header('Location:./Controllers/index_controller.php');
}

?>