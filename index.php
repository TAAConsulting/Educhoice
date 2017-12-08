<?php include("./inc/header.inc.php");?>
<?php include("./inc/reg.inc.php");?>
<?php include("./inc/userlogin.php");?>

        <div class="tableSignUp">
            <table>
                <tr>
                    <td width="65%" valign="top">
                        <h2>Join Educhoice Today!</h2>
                    </td>
                    <td width="35%" valign="top">
                        <h2>Sign-up Below!</h2>
                        <form action="index.php" method="POST">
                            <input id="inSignUp" type="text" name="firstname" size="25" placeholder="First Name" /><br><br>
                            <input id="inSignUp" type="text" name="lastname" size="25" placeholder="Surname" /><br><br>
                            <input id="inSignUp" type="text" name="email" size="25" placeholder="E-mail Address" /><br><br>
                            <input id="inSignUp" type="text" name="email2" size="25" placeholder="Confirm Email" /><br><br>
                            <input id="inSignUp" type="text" name="password" size="25" placeholder="Password" /><br><br>
                            <input id="inSignUp" type="text" name="password2" size="25" placeholder="Confirm Password" /><br><br>
                            <input id="button_signup" type="submit" name="create" value="Create Account" /><br><br>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
<?php include("./inc/footer.inc.php");?>
