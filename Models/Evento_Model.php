<?php

class EventoDAO
{

    var $uuid;
    var $nombre;

    var $mysqli;


    //Constructor de la clase
    function __construct()
    {
        include_once '../Functions/Access_DB.php';
        $this->mysqli = ConnectDB();
    }

    function setData($uuid,$nombre)
    {
        $this->uuid = $uuid;
        $this->nombre = $nombre;
    }



    function generate(){
        return uniqid(true);
    }

}
?>