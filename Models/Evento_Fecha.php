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

    function checkIn($email,$uuid,$nombre)
    {
        $sql = "INSERT INTO ANOTADOS (emailUser, uuid,nombre) VALUES ('". $email."','". $uuid."','". $nombre."')";
        mysqli_query($this->mysqli,$sql);
    }

    function GETCHECKED($emailUser)
    {
        $sql = "SELECT * from ANOTADOS WHERE emailUser ='".$emailUser."'";
        $resultado = mysqli_query($this->mysqli,$sql);

        return $resultado;
    }

    function GETCHECKEDALL($uuid)
    {
        $sql = "SELECT * from ANOTADOS WHERE uuid ='".$uuid."'";
        $resultado = mysqli_query($this->mysqli,$sql);

        return $resultado;
    }
    
    function GETALL($uuid)
    {
        $sql = "select * from EVENTO_FECHA where uuid = '".$uuid."'";
        $resultado = mysqli_query($this->mysqli,$sql);

        return $resultado;
    }

    function GETCHOICE($emailUser){
        $sql = "select * from ELECCIONES";
        $resultado = mysqli_query($this->mysqli,$sql);

        return $resultado;
    }

    function delete($EventoFechaId){
        $sql = "Delete from EVENTO_FECHA where EventoFechaId = '".$EventoFechaId."'";
        $resultado = mysqli_query($this->mysqli,$sql);
    }
}
?>