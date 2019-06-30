<?php

class EditarEventoView{
 
    private $name;
    private $uuid;
    private $basePath;
    private $listaEventoFechas;
    const LINK = "ver_evento_controller.php?uuid=";

	function __construct($evento,$eventoFechas){
        $this->name = $evento["nombre"];
        $this->uuid = $evento["uuid"];
        $this->listaEventoFechas = $eventoFechas;
        $array_ini = parse_ini_file("../config.ini");
        $this->basePath = $array_ini["BASE_PAHT"];
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


    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Crear Evento</h4>
                </div>
                <div class="modal-body">
                    <h4 id="msgError" class="modal-title hidden">La fecha introducida ya existe</h4>
                    <br>
                    <div class="form-group">
                        <label>Fecha:</label>
                        <input id="fecha" type="date" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Hora Inicio:</label>
                        <input id="hini" type="time" class="form-control" >
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Hora Fin:</label>
                        <input id="hfin" type="time" class="form-control" >
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" id="editViewAddHollow" class="btn btn-success">Crear</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        
        </div>
    </div>


    <?php echo $lang["msgEventLink"] ?> <a href="<?php echo self::LINK . $this->uuid; ?>"><?php echo $this->basePath . self::LINK . $this->uuid; ?></a>
    <div id="uuid" hidden><?php echo $this->uuid;?></div>




    <form>
        <div class="form-group">
            <label for="name"><?php echo $lang["eventName"] ?></label>
            <input type="text" class="form-control" id="name" value="<?php echo $this->name;?>">
        </div>

        <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora inicio</th>
                            <th>Hora fin</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($this->listaEventoFechas as $eventoFecha) {
                                echo '<tr class="hollow">'.
                                '<td class="fecha">'.$eventoFecha["fecha"].'</td>'.
                                '<td class="hIni">'.$eventoFecha["HoraInicio"].'</td>'.
                                '<td class="hFin">'.$eventoFecha["HoraFin"].'</td>'.
                                "<td> <a href='../Controllers/eliminar_fecha_evento.php?uuid=".
                                $this->uuid."&EventoFechaId=".$eventoFecha["EventoFechaId"]."'>Eliminar </a></td>".
                            '</tr>';
                            }
                        ?>
                    </tbody>
                    </table>
    </form>
    
    <button type="button" id="addhollow" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="iconSize glyphicon glyphicon-plus-sign"></span> Añadir hueco</button>
    <br>
    <br>

    <a href='../Controllers/Ver_Eventos.php'> Volver </a>
    <br>
    <br>
<?php

		 include '../Locales/footer.php';
	}   

}