<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/30/16
 * Time: 8:41 PM
 */
$hash = $_SESSION['hash'];

require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes.php");

$user_menu = file_get_contents($USER_MENU_PATH);

$xmlObj = new SimpleXMLElement($user_menu);

$menu = "";

foreach ($xmlObj->children() as $menuItem) {
	if ($menuItem->active != 1)
		continue;
	$menu .=
		"<div class=\"menu-item button\" onclick=\"load_page('" . $menuItem->link . "');\">
			<span>" . $menuItem->label . "</span>
		</div>";
}

echo $menu;

if ($hash_verified) {
	require_once ($server . "/process/menu/load_admin_user_menu.php?hash=" . $hash);
}
else {
	require_once ($server . "/process/menu/load_admin_login.php");
}

?>