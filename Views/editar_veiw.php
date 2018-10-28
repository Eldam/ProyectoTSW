<?php

class EditarView{
 
    private $name;
    private $uuid;
    private $basePath;
    const LINK = "ver_evento_controller.php?uuid=";

	function __construct($uuid, $name){
        $this->name;
        $this->uuid = $uuid;
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
    include '../Locales/header.html';
        


        
?>
        <?php echo $lang["msgEventLink"] ?> <a href="<?php echo self::LINK . $this->uuid; ?>"><?php echo $this->basePath . self::LINK . $this->uuid; ?></a>



        <form>
            <div class="form-group">
                <label for="name"><?php echo $lang["eventName"] ?></label>
                <input type="text" class="form-control" id="name" value="<?php echo $this->name;?>">
            </div>
        </form>


<?php

		 include '../Locales/footer.html';
	}   

}