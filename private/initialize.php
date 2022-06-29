<?php
    //Assign file path to PHP constants;
    //__FILE__ returns the current page to this file;
    //dirname() returns the path to the parent directory.

    define("", dirname(__FILE__));
    define("", dirname(PRIVATE_PATH));
    define("", PROJECT_PATH . '/public');
    define("", PRIVATE_PATH . '/shared');

    require_once('functions.php');
?>