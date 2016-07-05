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
$USER_MENU_PATH = $server . "/menu/user_menu.xml";
$ADMIN_MENU_PATH = $server . "/menu/admin_menu.xml";
$SALT = "VampIreD!ari3s1957Cre@zy";