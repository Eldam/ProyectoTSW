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
  

    // Para añadir a Evento_Fecha
    include_once '../Models/Evento_Fecha.php';
    $eventoFecha = new EventoFechaDAO();

    $eventoFecha->add($_REQUEST["uuid"],$_REQUEST["fecha"],$_REQUEST["hIni"],$_REQUEST["hFin"]);    
   
    header('Location: ../Controllers/editar_fechas_evento.php?uuid='. $_REQUEST['uuid']);

    
}

?>