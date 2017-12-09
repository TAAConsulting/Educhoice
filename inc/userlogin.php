<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// User Login Code
if ((isset($_POST["email_login"])) && isset($_POST["password_login"])) {
    // (filter_input(INPUT_POST, 'email_login') && filter_input(INPUT_POST, 'password_login')) 

    // This is to filter and accept only numbers and letters
    $email_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["email_login"]);    
    $password_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password_login"]); 
    
    // to reverse-encrypted the password stored in the sql
    $password_login_md5 = md5($password_login);
    
    // connect with the database and make a query
    $sql = mysqli_query($con, "SELECT id FROM users WHERE email='$email_login' AND password='$password_login_md5' LIMIT 1");
    
    // check whether the user exists
    $userCount = mysqli_num_rows($sql);
    if ($userCount == 1) {
        while ($row = mysqli_fetch_array($sql)) {
            $id = $row["id"];
        }
        $_SESSION["email_login"] = $email_login;
        header("location: home.php");
        exit();
    }
    else {
        echo 'That information is incorrect, try again';
        exit();
    }
    
}
?>
