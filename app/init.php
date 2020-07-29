<?php
session_start();
ob_start();

define('PATH' , '.' );
define('SUBFOLDER' , true);
define('URL' , 'http://localhost/logistics');

function loadClasses($className){
    require __DIR__ . '/classes/' . strtolower($className) .'.php';
}
$autoload = spl_autoload_register('loadClasses');

date_default_timezone_set('Europe/Istanbul');

require __DIR__ . '/db.php';


foreach (glob(__DIR__ . '/helper/*.php') as $helperFile){
    require $helperFile;
}
