
<?php

class UserDAO
{

    var $email;
    var $password;
    var $nombre;
    //atributo para guardar un link a la BD.
    var $mysqli;


    //Constructor de la clase
    //parametros: el dni, el nombre y los apellidos
    function __construct( $email, $password)
    {
        $this->email = $email;
        $this->password = hash('md5', $password);

        include_once '../Functions/Access_DB.php';
        $this->mysqli = ConnectDB();
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }



//Metodo ADD
//Inserta en la tabla  de la bd  los valores
// de los atributos del objeto. Comprueba si la clave/s esta vacia y si
//existe ya en la tabla
    function ADD()
    {
        if ($this->login != '' || $this->password)
        {
            $sql = "select * from USUARIO where email = '".$this->email."'";
            $resultado = mysqli_query($this->mysqli,$sql);
            if ((mysqli_num_rows($resultado)) == 0)
            {
                $sql = "INSERT INTO USUARIO (email,  password,  nombre ) VALUES ('".$sql.$this->email."','".$this->password."','".$this->Nombre."')";

                mysqli_query($this->mysqli,$sql);

                return true;
            }
            else{
                return "El email ya existe";
            }
        }
        else
            return "Los campos email y password no pueden ser vacios.";
    }




    // funcion GET: recupera todos los atributos de una tupla a partir de su clave
    function GET()
    {
        $sql = "select * from USUARIO where login = '".$this->login."'";
        $resultado = mysqli_query($this->mysqli,$sql);

        return $resultado;
    }



    //funcion SEARCH: hace una búsqueda en la tabla con
    //los datos proporcionados. Si van vacios devuelve todos
    function SEARCH()
    {
        /* $sql = "select * from USUARIO WHERE login LIKE '%$this->login%'";*/
        $sql = "select * from USUARIO 
            where   
                (Nombre LIKE '%$this->Nombre%') &&
                (Correo LIKE '%$this->Correo%')
                ";
        $resultado = mysqli_query($this->mysqli,$sql);
        return $resultado;

    }






    // funcion login: realiza la comprobación de si existe el usuario en la bd y despues si la pass
    // es correcta para ese usuario. Si es asi devuelve true, en cualquier otro caso devuelve el
    // error correspondiente
    function login(){

        $sql = "SELECT *
			FROM USUARIO
			WHERE (
				(email = '$this->email') 
			)";


        $resultado = mysqli_query($this->mysqli, $sql);
        if(mysqli_num_rows($resultado) == 0){
            return 'El email no existe';
        }
        else{
            $tupla = $resultado->fetch_array();
            if ($tupla['password'] == $this->password){
                return true;
            }
            else{
                return 'La password para este usuario no es correcta';
            }
        }
    }
}