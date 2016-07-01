<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/30/16
 * Time: 8:26 PM
 */

$host = "localhost";
$port = 3306;
$db_name = "addresses";
$username = "root";
$password = "Ade@li123";

$sql = new mysqli($host, $username, $password, $db_name, $port);

if ($sql->errno) die();