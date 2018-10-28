<?php

class Index {

    function __construct(){
        $this->render();
    }

    function render(){

        include '../Locales/header.php';
        include '../Locales/home.php';
        include '../Locales/footer.php';
    }

}

?>