<?php

// Function used for automatical autoloading
function custom_autoloader( $class_name ){
    $file = __DIR__.'/includes/'.$class_name.'.php';

    if ( file_exists($file) ) {
        require_once $file;
    }
}

spl_autoload_register('custom_autoloader');