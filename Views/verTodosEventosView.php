<?php

class verTodosEventosView{

    var $eventos;

	function __construct($response){
        $this->eventos= $response;

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


<nav id="mainnavigation" class="col-md-3 col-lg-3">

			<a href="../Controllers/crear_evento.php" class="btn btn-info" role="button"><?php echo $lang["create"] ?></a>

		</nav>

			
			<article id="maincontent" class="col-md-6 col-lg-6">

				<h2>
					<?php
						echo $lang["seeEvents"];
					?>
				</h2>

				<table class="table table-condensed">
						<thead>
							<tr>
								<th>Usuario</th>
								<th>Uuid</th>
                                <th>Evento</th>
                                <th>Accion</th>
							</tr>
						</thead>
						<tbody>
                        <?php
                            $aux = TRUE;
                            while ($event = mysqli_fetch_array($this->eventos)){
                                if($aux){
                                    echo '<tr class="info">';
                                    $aux = FALSE;
                                }else{
                                    echo '<tr class="Success">';
                                    $aux = TRUE;
                                }

                                echo"<td>".$event['emailUser']."</td>".
                                    "<td>".$event['uuid']."</td>".
                                    "<td>".$event['nombre']."</td>".
                                    "<td> <a href='../Controllers/editar_fechas_evento.php?uuid=".
                                    $event["uuid"].
                                    "'>Ver/Editar </a></td>".
                                    "</tr>";
                            }
                        ?>
						</tbody>
					</table>

			</article>
		</div>	

        <?php

        include '../Locales/footer.php';
    }   

}