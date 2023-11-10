<?php 
// include("../config/app.php");
// include("../config/DB.php");
// include("../kernel/Connexion.php");

spl_autoload_register(function($class){
    $include ='../'.str_replace("\\", '/', $class).'.php';
    include($include);
});