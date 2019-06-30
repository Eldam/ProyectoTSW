<?php
//session
session_start();
//incluir funcion autenticacion
include_once '../Functions/Authentication.php';
//si no esta autenticado
if (!IsAuthenticated()){
    header('Location: ../index.php');
}
//esta autenticado
else{
  
    include_once '../Models/Evento_Fecha.php';
    $event = new EventoFechaDAO();
    $response = $event->GETALL($_REQUEST['uuid']);
    $checked = $event->GETCHECKEDALL($_REQUEST['uuid']);

    include_once '../Views/participarEventosView.php';
    new participarEventosView($response,$checked);

}

?>