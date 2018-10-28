<?php

session_start();
//incluir funcion autenticacion
include '../Functions/Authentication.php';
//si no esta autenticado
if (!IsAuthenticated()){
    header('Location: ../index.php');
}
//esta autenticado
else{
        if (isset($_REQUEST['lang'])) {
            $_SESSION['lang'] = $_REQUEST['lang'];
            
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            header('Location: '.$_SERVER['HTTP_REFERER']);
            
        }
        
}



?>