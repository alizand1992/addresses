<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/24/16
 * Time: 7:37 PM
 */
require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes.php");

$username = $_POST['username'];

$query = "SELECT * FROM `users` WHERE username = '$username'";

$res = $sql->query($query) or die($sql->error);

if ($res->num_rows() == 0)
    die ($USER_DOES_NOT_EXIST);

$_SESSION['hash'] = sha1($username . $res['id'] . $SALT);
