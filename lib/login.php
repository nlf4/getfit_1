<?php
require_once "autoload.php";

$formname = $_POST["loginform"];
$buttonvalue = $_POST['loginbutton'];

if ( $formname == "login_form" AND $buttonvalue == "Log in" )
{
    //gebruiker opzoeken ahv zijn login (e-mail)
    $sql = "SELECT * FROM users WHERE usr_email='" . $_POST['usr_email'] . "' ";
    $data = GetData($sql);
    if ( count($data) == 1 )
    {
        $row = $data[0];
        //password controleren
        if ( password_verify( $_POST['usr_password'], $row['usr_password'] ) ) $login_ok = true;
    }

    if ( $login_ok )
    {
        print "Welcome, " . $row["usr_firstname"] . ". You are logged in!";
        session_start();
        $_SESSION['usr'] = $row;
    }
    else
    {
        print "Sorry! Wrong login or password!";
    }
}
?>