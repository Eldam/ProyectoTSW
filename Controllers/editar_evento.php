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
    $eventoDAO = new EventoDAO();
    $evento = mysqli_fetch_assoc( $eventoDAO->get($_REQUEST['uuid']));

    include_once '../Models/Evento_Fecha.php';
    $eventoFechaDAO = new EventoFechaDAO();
    $eventoFechas = $eventoFechaDAO->GETALL($_REQUEST['uuid']);
                        
    include_once '../Views/editar_evento_view.php';
    new EditarEventoView($evento,$eventoFechas);

}

?>