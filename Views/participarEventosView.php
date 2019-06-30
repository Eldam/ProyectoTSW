<?php

class participarEventosView{

    var $eventos;
    var $checked;

    function __construct($response,$checked){
        $this->eventos= $response;
        $this->checked= $checked;
		$this->render();
	}

	function render(){
        if(isset($_SESSION['lang'])){
            // si es true, se crea el require y la variable lang
            $lang = $_SESSION["lang"];
            require_once "../Lang/".$lang.".php";
            // si no hay sesion por default se carga el lenguaje espanol
        }else{
            require_once "../Lang/es.php";
        }
    
        /*	include './Strings_'.$_SESSION['idioma'].'.php';*/
        include '../Locales/header.php';
    
    ?>
    
        <div class="container-fluid" id="container">
                                
            <article id="maincontent" class="col-md-12 col-lg-12">

            <h2>Vista evento</h2>         
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <?php
                    while ($event = mysqli_fetch_array($this->eventos)){
                        echo '<th class="headPosition">Dia '. $event["Fecha"]. "<p>Hora Inicio: ". $event["HoraInicio"]. " - ". $event["HoraFin"]. "</p></th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($event = mysqli_fetch_array($this->eventos)){

                        echo "<td>". $event["emailUser"]. "</td>";

                        if($event["Eleccion"] == NULL){
                            echo "<td></td>";
                        }else{
                            if($event["Eleccion"] == 0){
                                echo '<td><i class="fa fa-question-circle" aria-hidden="true"></i></td>';
                            }else{
                                if($event["Eleccion"] == 1){
                                    echo '<td><i class="fa fa-check-square" aria-hidden="true"></i></td>';
                                }else{
                                    echo '<td><i class="fa fa-times" aria-hidden="true"></i></td>';
                                }
                            }
                        }
                    }
                    ?>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><div class="btn-group">
                            <button type="button" class="btn btn-primary">Voy</button>
                            <button type="button" class="btn btn-primary">No Voy</button>
                            <button type="button" class="btn btn-primary">Quizas</button>
                        </div></td>
                    <td><div class="btn-group">
                        <button type="button" class="btn btn-primary">Voy</button>
                        <button type="button" class="btn btn-primary">No Voy</button>
                        <button type="button" class="btn btn-primary">Quizas</button>
                    </div></td>
                    <td></td>
                    <td><div class="btn-group">
                            <button type="button" class="btn btn-primary">Voy</button>
                            <button type="button" class="btn btn-primary">No Voy</button>
                        <button type="button" class="btn btn-primary">Quizas</button>
                    </div></td>
                </tr>
            </tbody>
        </table>


            </article>
        </div>	
<?php  
    }
}
