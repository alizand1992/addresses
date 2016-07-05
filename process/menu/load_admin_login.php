<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/4/16
 * Time: 7:49 PM
 */
require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes.php");

$loginPage = file_get_contents($LOGIN_PAGE_PATH);
echo $loginPage;