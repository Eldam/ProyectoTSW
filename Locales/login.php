<?php
    if(isset($_SESSION['lang'])){
        // si es true, se crea el require y la variable lang
        $lang = $_SESSION["lang"];
        require "../Lang/".$lang.".php";
        // si no hay sesion por default se carga el lenguaje espanol
    }else{
        require "../Lang/es.php";
	}
?>
<link rel="stylesheet" href="../Locales/login.css">

<div class="main">

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" <?php if (!isset($_REQUEST['register']))echo 'checked'; ?> ><label for="tab-1" class="tab"><?php echo $lang["Login"] ?></label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"<?php if (isset($_REQUEST['register']))echo 'checked'; ?>><label for="tab-2" class="tab"><?php echo $lang["register"] ?></label>
            <div class="login-form">

                <form method="post" action="../Controllers/login_controller.php">

                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="email" class="label"><?php echo $lang["email"] ?></label>
                            <input id="email" name="email" type="text" class="input" autofocus onchange="comprobarVacio(this);">
                        </div>
                        <div class="group">
                            <label for="password" class="label"><?php echo $lang["password"] ?></label>
                            <input id="password" name="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input id="send" type="submit" class="button" value="<?php echo $lang["signIn"] ?>" onclick="comprobarVacio(this)">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-2"><?php echo $lang["nrum"] ?></label>
                        </div>
                    </div>

                </form>

                <form method="post" action="../Controllers/register_controller.php">

                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="email" class="label"><?php echo $lang["email"] ?></label>
                            <input id="email" name="email" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="password" class="label"><?php echo $lang["password"] ?></label>
                            <input id="password" name="password" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="name" class="label"><?php echo $lang["name"] ?></label>
                            <input id="name" name="name" type="text" class="input">
                        </div>
                        <div class="group">
                            <input id="send" type="submit" class="button" value="<?php echo $lang["signUp"] ?>">
                        </div>
                        <div class="foot-lnk">
                            <label for="tab-1"><?php echo $lang["rum"] ?></label>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>