<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/30/16
 * Time: 8:41 PM
 */
session_start();
$hash = $_POST['hash'];

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

$menu .= "
	<div id=\"profile-button\" 
		onclick=\"display_profile_options();\"
		onmouseover=\"display_profile_options(); clear_timer();\"
		onmouseout=\"hide_profile_options();\">
		<img src=\"images/profile/icon-profile.png\" width=\"45px\" height=\"45px\"/>
	</div>";

echo $menu;

if ($hash_verified) {
	require_once ($server . "/process/menu/load_admin_user_menu.php?hash=" . $hash);
}
else {
	require_once ($server . "/process/menu/load_admin_login.php");
}

?>