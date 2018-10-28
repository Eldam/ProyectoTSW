<?php
/*
Esta función valida si existe la variable de session login
*/
function IsAuthenticated(){
	return (isset($_SESSION['email']));
}
?>

