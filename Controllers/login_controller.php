<?php

session_start();
if(!isset($_REQUEST['email']) && !(isset($_REQUEST['password']))){
    include_once '../Views/login_view.php';
    $login = new Login();
}
else{

    /*include '../Functions/Access_DB.php';*/

    include_once '../Models/User_Model.php';
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];


    $usuario = new UserDAO($email,$password);
    $respuesta = $usuario->login();


    if ($respuesta == 'true'){
        session_start();
        $_SESSION['email'] = $_REQUEST['email'];
        header('Location:../Controllers/index_controller.php');
    }
    else{
        include_once '../Views/MESSAGE_View.php';
        new MESSAGE($respuesta, './login_controller.php');
    }

}

?>

