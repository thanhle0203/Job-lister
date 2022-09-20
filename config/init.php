<?php
// Config file
require_once 'config.php';

// Autoloader
function spl__autoload($class_name){
    //$class_name = strtolower($class_name);
    //$path = "{$class_name}.php";
   // $iterator = new DirectoryIterator(dirname(__FILE__));
    //$files = $iterator->getPath()."/lib/".$class_name.".php";
    //if (file_exists($path)){
       //require_once($path);
    //} else {
      // die("The file {$class_name}.php could not be found!");
    //} 
    //require_once($path);
    require_once 'lib/'.$class_name. '.php';
}

//spl_autoload_register(function($class_name) {
    //$class_name = strtolower($class_name);
    //$path = "{$class_name}.php";
   // if (file_exists($path)){
       // require_once($path);
    //} else {
       // die("The file {$class_name}.php could not be found!");
    //}
    //require_once 'lib/'.$class_name. '.php';
   // $iterator = new DirectoryIterator(dirname(__FILE__));
   // $files = $iterator->getPath()."/lib/".$class_name.".php";
    
    //if (file_exists($files)) {
        //include($files);
   // } else {
      // die("Warning:The file {$files}.class.php could not be found!");
    
    //}
//});

//spl_autoload_register(function ($class) {
    //@require_once('lib/type/' . $class . '.php');   
   // @require_once('lib/size/' . $class . '.php');
//});

?>


