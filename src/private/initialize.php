<?php
    //Assign file path to PHP constants;
    //__FILE__ returns the current page to this file;
    //dirname() returns the path to the parent directory.

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');


    //Assign the root URL to PHP Constant
    // * Do not need to include the domain
    // * Use same document root as webserver
    // * can set a hardcoded value:
    //define ("WWW_ROOT", "file:///home/eullerson/documents/STG%20Consult/projetos/system-in-php/public");
    //define ("WWW_ROOT", "");
    // * Can dynamically find everything in url up to "/public"

    $public_end = strpos($_SERVER["SCRIPT_NAME"], '/public') + 7;
    $doc_root = substr($_SERVER["SCRIPT_NAME"], 0, $public_end);

    define("WWW_ROOT", $doc_root);

    require_once('functions.php');
?>