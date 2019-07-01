<?php

class participarEventosView{

    var $eventos;
    var $checked;
    var $list;

    function __construct($response,$checked,$list){
        $this->eventos= $response;
        $this->checked= $checked;
        $this->list= $list;
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
                    foreach($this->eventos as $event){
                        echo '<th class="headPosition">Dia '. $event["fecha"]. "<p>Hora Inicio: ". $event["HoraInicio"]. " - ". $event["HoraFin"]. "</p></th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                    <?php
                    foreach($this->checked as $check){
                        echo "<tr>";
                        echo "<td>". $check["emailUser"]. "</td>";
                        foreach($this->eventos as $event){
                            echo "<td>";
                            if(array_key_exists($event["EventoFechaId"],$this->list)){
                                $aux = $this->list[$event["EventoFechaId"]];//[$check["emailUser"]];
                                if(array_key_exists($check["emailUser"],$aux)){
                                    if($aux[$check["emailUser"]] == 0){
                                        echo '<i class="fa fa-question-circle" aria-hidden="true"></i>';
                                    }else{
                                        if($aux[$check["emailUser"]] == 1){
                                            echo '<i class="fa fa-check-square" aria-hidden="true"></i>';
                                        }else{
                                            echo '<i class="fa fa-times" aria-hidden="true"></i>';
                                        }
                                    }
                                }
                            }
                            echo "</td>";
                        }
                    echo "</tr>";
                    }
                    ?>
            </tr>
                <tr>
                    <td></td>
                    <?php
                    foreach($this->eventos as $event){
                        echo "<td>";
                            echo '<div class="btn-group">';
                                echo '<button type="button" class="btn btn-primary">Voy</button>';
                                echo '<button type="button" class="btn btn-primary">No Voy</button>';
                                echo '<button type="button" class="btn btn-primary">Quizas</button>';
                            echo "</div>";
                        echo "</td>";
                    }

                    ?>
                </tr>
            </tbody>
        </table>


            </article>
        </div>	
<?php  
    }
}
