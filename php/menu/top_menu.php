<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/30/16
 * Time: 8:41 PM
 */
$hash = $_SESSION['hash'];

$server = $_SERVER['DOCUMENT_ROOT'];
require_once ($server . "/process/connect.php");
require_once ($server . "/process/validate_hash.php");

$level = 2;

if ($hash_verified)
    $level = 1;


$query = "SELECT * FROM `menu` WHERE `active` = 1 AND `level` = ";

$res = $sql->query($query) or die($sql->errno);

while ($row = $res->fetch_row())
{
    
}
?>