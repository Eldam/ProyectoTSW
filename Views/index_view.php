<?php

class Index {

    function __construct(){
        $this->render();
    }

    function render(){

        include '../Locales/header.html';
        include '../Locales/home.html';
        include '../Locales/footer.html';
    }

}

?>