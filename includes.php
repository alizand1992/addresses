<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/2/16
 * Time: 8:49 PM
 */
session_start();
// SERVER PATH
$server = $_SERVER['DOCUMENT_ROOT'];


// INCLUDES
require_once($server . "/process/connect.php");
require_once($server . "/process/validate_hash.php");


// VARIABLES
$ADMIN_MENU_PATH = $server . "/xml/menu/admin_menu.xml";
$USER_MENU_PATH = $server . "/xml/menu/user_menu.xml";
$LOGIN_PAGE_PATH = $server . "/html/login_page.html";
$SALT = "VampIreD!ari3s1957Cre@zy";

// SUCCESS CODES
$SUCCESS = 1;

// ERROR CODES
$INCORRECT_USER_PASS = 5;
$NOT_SIGNED_IN = 6;
$USER_EXISTS = 10;

//MENU CODES
$ACTIVE = 1;
$INACTIVE = 0;