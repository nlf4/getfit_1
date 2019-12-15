<?php
$login_form = true;
require_once "autoload.php";

$formname = $_POST["formname"];
$buttonvalue = $_POST['loginbutton'];

if ( $formname == "login_form" AND $buttonvalue == "Log in" )
{
    if ( CheckLogin( $_POST['usr_email'], $_POST['usr_password'] ) )
    {
        $_SESSION["msg"][] = "Welcome, " . $_SESSION['usr']['usr_voornaam'] . "!" ;
        header("Location: https://wdev.be/wdev_nicole/dag2/profile.php");
    }
    else
    {
        $_SESSION["msg"][] = "Sorry! Wrong password!";
        header("Location: https://wdev.be/wdev_nicole/dag2/login.php");
    }
}
else
{
    $_SESSION["msg"][] = "Wrong formname or buttonvalue";
}
?>