<?php
class Autoloader{
    public static function load($className){
        $fileName = str_replace("\\", "/", $className);

        echo $fileName .= ".php";

        include_once $fileName;
        if(class_exists($className)){
            return true;
        }

        return false;
    }
}

spl_autoload_register("Autoloader::load");