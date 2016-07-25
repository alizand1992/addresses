<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 7/24/16
 * Time: 7:39 PM
 */

require_once ($_SERVER['DOCUMENT_ROOT'] . "/includes.php");

$username = $_POST['username'];
$password = $_POST['password'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$date = time();
$active = 1;

$query = "SELECT * FROM `users` WHERE username = '$username'";
$res = $sql->query($query) or die($sql->error);

if ($res->num_rows != 0) die($USER_EXISTS);

$query = "INSERT INTO `users` (fname, lname, username, password, user_since, last_login, active) 
                VALUES ('$fname', '$lname', '$username', '$password', date, date, 1)";

$res = $sql->query($query) or die($sql->error);

echo $SUCCESS;