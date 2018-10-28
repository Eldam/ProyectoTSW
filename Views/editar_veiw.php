<?php

class EditarView{
 
    private $uuid;
    private $basePath;
    const LINK = "ver_evento_controller.php?uuid=";

	function __construct($uuid){
        $this->uuid = $uuid;
        $array_ini = parse_ini_file("../config.ini");
        $this->basePath = $array_ini["BASE_PAHT"];
		$this->render();
	}

	function render(){

	/*	include './Strings_'.$_SESSION['idioma'].'.php';*/
        // include '../Locales/Header.html';


        
?>
        El link del evento es: <a href="<?php echo self::LINK . $this->uuid; ?>"><?php echo $this->basePath . self::LINK . $this->uuid; ?><i class="fa fa-arrow-circle-left" id="returnIcon"></i></a>
<?php

		// include '../Locales/Footer.html';
	}   

}