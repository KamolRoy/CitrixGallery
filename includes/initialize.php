<?php
/**
 * Created by PhpStorm.
 * User: comol
 * Date: 16/11/2016
 * Time: 11:59 AM
 */


/*
 * Defining the core path
 */
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'Users'.DS.'comol'.DS.'xampp'.DS.'htdocs'.DS.'HTML'.DS.'PHP'.DS.'Coding Knowledge'.DS.'CitrixGallery');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');


// Load configuration file first
require_once(LIB_PATH.DS."config.php");

// Load basic function next so that everything after can use them
require_once(LIB_PATH.DS."function.php");

// Load core objects
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");

// Load database-related classes
require_once(LIB_PATH.DS."user.php");

?>