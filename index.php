<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 6/28/16
 * Time: 6:51 PM
 */
session_start()
?>

<html>
<head>
	<title>Site Title</title>
	<!--  Script  -->
    <script
        src="https://code.jquery.com/jquery-3.0.0.js"
        integrity="sha256-jrPLZ+8vDxt2FnE1zvZXCkCcebI/C8Dt5xyaQBjxQIo="
        crossorigin="anonymous"></script>
    <script src="js/main_adjust.js" type="text/javascript"></script>
	<script src="js/menu.js" type="text/javascript"></script>

    <!--  Stylesheets  -->
    <link rel="stylesheet" type="text/css" href="css/button.css"/>
    <link rel="stylesheet" type="text/css" href="css/top_menu.css"
</head>
<body onload=" load_menu(<?php echo "'".$_SESSION['hash']."'"; ?>); adjust_buttons();">
    <div id="top-menu">
        
    </div>
    <div id="top-banner">

    </div>
    <div id="left-banner">

    </div>
    <div id="main-container">

    </div>
</body>
</html>
