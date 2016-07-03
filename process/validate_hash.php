<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/2/16
 * Time: 7:37 PM
 */

$server = $_SERVER['DOCUMENT_ROOT'];
require_once ($server . "/process/connect.php");

$query = "SELECT * FROM `users` WHERE `active` = TRUE";
$res = $sql->query($query) or die($sql->error);

$hash_verified = false;

while ($data = $res->fetch_row())
{
    $gen_hash = sha1 ($data['id'] . $data['user_since'] . $data['username']);
    if ($gen_hash == $hash)
    {
        $hash_verified = true;
        break;
    }
}

