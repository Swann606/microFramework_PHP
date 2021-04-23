<?php

/****Configuration ****/

ini_set('display_errors', 'on');
error_reporting(E_ALL);


// My Autoload permet de charger toute les class à l'ouverture de l'application au lancement de l'index

class MyAutoload
{ 
    public static function start()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST','http://'. $host.'/folderName/');
        define('ROOT', $root.'/folderName/');

        define('CONTROLLER', ROOT . 'controller/');
        define('VIEW', ROOT . 'view/');
        //Model
        define('ENTITY', ROOT . 'model/entity/');
        define('MANAGER', ROOT . 'model/manager/');


        define('CLASSES', ROOT . 'classes/');

        define('ASSETS', HOST . 'assets/');

        ////////////Database connexion

        define("DB_HOST","localhost");
        define("DB_NAME","dbname");
        define("DB_USER","root");
        define("DB_PASS","");

        define("XXXX_TABLE_NAME","XXXX");


    }

    public static function autoload($class)
    {
        if(file_exists(ENTITY.$class.'.php')){
            include_once (ENTITY.$class.'.php');

        }else if(file_exists(MANAGER.$class.'.php')){
            include_once (MANAGER.$class.'.php');

        }else if (file_exists(CLASSES.$class.'.php')){
            include_once (CLASSES.$class.'.php');

        }else if (file_exists(CONTROLLER.$class.'.php')){
            include_once (CONTROLLER.$class.'.php');

        }else if (file_exists(VIEW.$class.'.php')){
            include_once (VIEW.$class.'.php');

        }

    }

}






