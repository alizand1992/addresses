<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/30/16
 * Time: 8:41 PM
 */
$hash = $_SESSION['hash'];

require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes.php");

echo $user_menu_path;

$user_menu = file_get_contents($user_menu_path);

echo $user_menu;

$xmlObj = new SimpleXMLElement($user_menu);

foreach ($user_menu->{"menu-item"} as $menu)
{
    echo $menu->label . "<br/>";
}
?>