<?php
error_reporting(E_ALL);
    function autoload(string $name){
    if(file_exists("apps/Controller/{$name}.php")){
        require_once "apps/Controller/{$name}.php";
    }
    else if(file_exists("apps/Models/{$name}.model.php")){
        require_once "apps/Models/{$name}.model.php";
    }   
    else if(file_exists("apps/Helper/{$name}.helper.php")){
        require_once "apps/Helper/{$name}.helper.php";
    }
    }
    spl_autoload_register('autoload')
?>