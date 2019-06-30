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
  
    include_once '../Models/Evento_Model.php';
    include_once '../Models/Evento_Fecha.php';
    $event = new EventoDAO();
    $evento = new EventoFechaDAO();
    $eventosInscriptos = $evento->GETALL($_SESSION['email']);
    $eventosCreados = $evento->GETALL($_SESSION['email']);

    include_once '../Views/editar_view.php';
    new verTodosEventosView($eventosInscriptos,$eventosCreados);

}

?>