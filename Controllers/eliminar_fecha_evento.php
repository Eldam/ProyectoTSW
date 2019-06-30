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
    $eventoFechaDAO = new EventoFechaDAO();
    $eventoFechas = $eventoFechaDAO->delete($_REQUEST['EventoFechaId']);


    header('Location: ../Controllers/editar_fechas_evento.php?uuid='. $_REQUEST['uuid']);
}

?>