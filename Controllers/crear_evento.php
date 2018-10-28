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
    $evento = new EventoDAO();
    $uuid = $evento->generate();

    include_once '../Views/editar_veiw.php';
    new EditarView($uuid);

}

?>