<?php 
// The inclusion of database connection php file
include ("./inc/connect.inc.php");

// The original session starts
session_start();
if (!isset($_SESSION["email_login"])) {
    
}
else {
    $emailadd = $_SESSION["email_login"];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>EduChoice (Beta)</title>
        <link type="text/css" rel="stylesheet" href="./css/style.css" />
    </head>
    <body>      
        <div class="headerMenu">
            <div id="wrapper">
                <div class="logo">
                    <img src="./img/logo_basic.png" alt="App Logo"/>
                </div>
                <div class="search_box">
                    <form action="search.php" method="GET" id="search">
                        <input type="text" name="q" size="80" placeholder="Search your alumni here..." />
                    </form>
                </div>
                <div class="login_box">
                    <form action="header.inc.php" method="POST" id="login">
                        <input id="email" type="text" name="email_login" size="25" placeholder="Email Address" />&nbsp;
                        <input id="passwd" type="text" name="password_login" size="25" placeholder="Password" />&nbsp;
                        <input id="button_login" type="submit" name="login" value="Log In" />
                    </form>
                </div>
            </div>
        </div>

