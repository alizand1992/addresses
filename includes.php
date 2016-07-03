<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/2/16
 * Time: 8:49 PM
 */

// INCLUDES
$server = $_SERVER['DOCUMENT_ROOT'];
require_once($server . "/process/connect.php");
require_once($server . "/process/validate_hash.php");


// VARIABLES
$user_menu_path = $server . "/menu/user_menu.xml";
$admin_menu_path = $server . "/menu/admin_menu.xml";