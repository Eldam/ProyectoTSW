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

    function update($uuid,$nombre)
    {
        $sql = "UPDATE EVENTO set nombre='".$nombre."' WHERE uuid='".$uuid."'";
        mysqli_query($this->mysqli,$sql);
    }



    function generate(){
        $this->uuid = uniqid(true);

        $sql = "INSERT INTO EVENTO (uuid, nombre, emailUser) VALUES ('". $this->uuid."', '".$this->nombre."', '". $_SESSION["email"] ."')";

        mysqli_query($this->mysqli,$sql);

        return $this->uuid;
    }



    function GET()
    {
        $sql = "select * from EVENTO where uuid = '".$this->uuid."'";
        $resultado = mysqli_query($this->mysqli,$sql);

        return $resultado;
    }

    function GETALL($emailUser)
    {
        $sql = "select * from EVENTO where emailUser = '".$this->emailUser."'";
        $resultado = mysqli_query($this->mysqli,$sql);

        return $resultado;
    }



    function EDIT()
    {
        $sql = "select * from EVENTO where uuid = '".$this->uuid."'";
        $resultado = mysqli_query($this->mysqli,$sql);


        if (mysqli_num_rows($resultado) == 1) {
            $sql = "UPDATE EVENTO SET 
            		nombre = '" . $this->nombre .
                "'  where uuid = '".$this->uuid."'";
            mysqli_query($this->mysqli, $sql);
            return "Actualizado";

        } else {
            return "El evento no existe";
        }
    }


}
?>