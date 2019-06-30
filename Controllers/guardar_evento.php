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
    $eventoFecha = new EventoFechaDAO();
    // $evento->add();

    $json = json_decode($_POST["data"]);

    //print_r(array_keys($json));
    
    echo "Nombre: " . $_POST["nombre"] . "\n";
    echo "Uuid: " . $_POST["uuid"];
    echo "data: ";
    //print_r(array_keys($_POST["data"]));
    foreach ($_POST["data"] as $clave=>$value){
        $eventoFecha->add($_POST["uuid"],$value["fecha"],$value["hIni"],$value["hFin"]);
        
    }


}

?>