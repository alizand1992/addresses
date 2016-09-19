<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/24/16
 * Time: 7:37 PM
 */
require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE username = '$username'";

$res = $sql->query($query) or die($sql->error);

if ($res->num_rows != 1)
    die ($INCORRECT_USER_PASS);

if (sha1($password) != $res->fetch_assoc()[0]['password'])
	die ($INCORRECT_USER_PASS);

$_SESSION['hash'] = sha1($username . $res['id'] . $SALT);
