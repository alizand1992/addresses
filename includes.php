<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/2/16
 * Time: 8:49 PM
 */

// SERVER PATH
$server = $_SERVER['DOCUMENT_ROOT'];


// INCLUDES
require_once($server . "/process/connect.php");
require_once($server . "/process/validate_hash.php");


// VARIABLES
$ADMIN_MENU_PATH = $server . "/xml/menu/admin_menu.xml";
$ADMIN_MENU_PATH = $server . "/xml/menu/admin_menu.xml";
$USER_MENU_PATH = $server . "/xml/menu/user_menu.xml";
$LOGIN_PAGE_PATH = $server . "/html/login_page.html";
$SALT = "VampIreD!ari3s1957Cre@zy";

// SUCCESS CODES
$SUCCESS = 1;

// ERROR CODES
$USER_EXISTS = 10;