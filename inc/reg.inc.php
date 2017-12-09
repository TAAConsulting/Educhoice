<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//declare variable for create account button
$reg = @$_POST['create'];

//declare variable to prevent errors
$fn = ""; // First Name
$sn = ""; // Surname
$em = ""; // Email
$cem = ""; // Confirm Email or Check Email
$pwd = ""; // Password
$cpwd = ""; // Confirm Password or Check Password
$dt = ""; // Signed up date

//activation of registration form
$fn = strip_tags(@$_POST['firstname']);
$sn = strip_tags(@$_POST['lastname']);
$em = strip_tags(@$_POST['email']);
$cem = strip_tags(@$_POST['email2']);
$pwd = strip_tags(@$_POST['password']);
$cpwd = strip_tags(@$_POST['password2']);
$dt = date("Y-m-d");

//
if ($reg) { 
    if ($em==$cem) {
        // Check if user already exists by comparing the email address in the database
        $try_check = mysqli_query($con, "SELECT email FROM users WHERE email='$em'");
        // Count the amount of rows where reg_email == $em (this is to find whether it is 0 or not)
        $check = mysqli_num_rows($try_check);
        // then
        if ($check == 0) {
            // and to check if all the fields have been filled in order to allow registration process to proceed
            if ($fn&&$sn&&$em&&$cem&&$pwd&&$cpwd) {
                // and to check that the password match
                if ($pwd == $cpwd) {
                    // and finally to check whether the charachter insterted within the limit
                    if (strlen($fn)>25|| strlen($sn)>25) {
                        echo 'The maximum limit for First Name or Last Name is 25 charachters';
                    }
                    else {
                        // also need to check the max length of password does not too long and too short
                        if (strlen($pwd)>30|| strlen($pwd)<5) {
                            echo 'Password must be between 5-30 charachters long';
                        }
                        else {
                            // then once the password is fine, need to hash the password for security purposes
                            $pwd = md5($pwd);
                            $cpwd = md5($cpwd);
                            $query = mysqli_query($con, "INSERT INTO users VALUES ('', '$fn', '$sn', '$em', '$pwd', '$dt', '0')");
                            die("<h2>Welcome to Educhoice</h2><br><h2>Login to your account to begin your journey!</h2>");
                        }
                    }
                }
                else {
                    echo 'Your passwords do not match!';
                }
            }
            else {
                echo 'There is a blank form';
            }
        }
        else {
            echo 'Email has been registered before';
        }
    }
    else {
        echo 'Your Email does not match';
    }
}
?>
