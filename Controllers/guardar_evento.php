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
  
    // Para añadir a Evento
    include_once '../Models/Evento_Model.php';
    $evento = new EventoDAO();
    // Para añadir a Evento_Fecha
    include_once '../Models/Evento_Fecha.php';
    $eventoFecha = new EventoFechaDAO();


    //no postea el nombre :S
    $evento->update($_POST["uuid"],$_POST["nombre"]);

    foreach ($_POST["data"] as $clave=>$value){
        $eventoFecha->add($_POST["uuid"],$value["fecha"],$value["hIni"],$value["hFin"]);    
    }
    $eventoFecha->checkIn($_SESSION["email"],$_POST["uuid"],$_POST["nombre"]);
}

?>