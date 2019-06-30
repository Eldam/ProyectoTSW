<?php

class EventoFechaDAO
{
    var $mysql;


    //Constructor de la clase
    function __construct()
    {
        include_once '../Functions/Access_DB.php';
        $this->mysqli = ConnectDB();
    }

    function add($uuid,$Fecha,$HoraInicio,$HoraFin)
    {
        $sql = "INSERT INTO EVENTO_FECHA (uuid, Fecha, HoraInicio, HoraFin) VALUES ('". $uuid."','". $Fecha."','". $HoraInicio."','". $HoraFin ."')";
        mysqli_query($this->mysqli,$sql);
    }
}
?>