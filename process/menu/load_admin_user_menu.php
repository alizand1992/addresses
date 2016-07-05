<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/4/16
 * Time: 7:04 PM
 */

$hash = $_GET['hash'];

$adminMenuFile = file_get_contents($ADMIN_MENU_PATH);

$xmlObj = new SimpleXMLElement($adminMenuFile);

$adminMenu =
	"
	<div id=\"profile-button\">
		<img src=\"\" width=\"\" height=\"\"/>
	</div>";

$adminMenu .= "
	<div id=\"profile-menu-container\">
	";

foreach ($xmlObj->children() as $adminMenuItems) {
	if ($adminMenuItems->active != 1)
		continue;
	$adminMenu .= "
		<div class=\"profile-menu-items button\"
			onclick=\"load_page('" . $adminMenuItems->link . "')\">
			" . $adminMenuFile->label . "
		</div>
	";
}

$adminMenu .= "</div>";

echo $adminMenu;