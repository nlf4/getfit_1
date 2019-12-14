<?php
require_once "autoload.php";

$formname = $_POST["formname"];
$tablename = $_POST["tablename"];
$pkey = $_POST["pkey"];

if ( $formname == "registration_form" AND $_POST['registerbutton'] == "Register" )
{
    //controle of gebruiker al bestaat
    $sql = "SELECT * FROM users WHERE usr_email='" . $_POST['usr_email'] . "' ";
    $data = GetData($sql);
    if ( count($data) > 0 ) die("This user already exists. Please use another login.");

    //controle wachtwoord minimaal 8 tekens
    if ( strlen($_POST["usr_password"]) < 8 ) die("Your password must contain at least 8 characters!");

    //controle geldig e-mailadres
    if (!filter_var($_POST["usr_email"], FILTER_VALIDATE_EMAIL)) die("Incorrect email address format");

    if (!($_POST["usr_password"] === $_POST["usr_passwordconfirm"])) die("Passwords do not match.");

        //wachtwoord coderen
    $password_encrypted = password_hash ( $_POST["usr_password"] , PASSWORD_DEFAULT );

    $sql = "INSERT INTO $tablename SET " .
        " usr_firstname='" . htmlentities($_POST['usr_firstname'], ENT_QUOTES) . "' , " .
        " usr_lastname='" . htmlentities($_POST['usr_lastname'], ENT_QUOTES) . "' , " .
        " usr_email='" . $_POST['usr_email'] . "' , " .
        " usr_password='" . $password_encrypted . "'  " ;

    if ( ExecuteSQL($sql) ) print "Thanks for your registration!" ;
    else print "Sorry, something went wrong. Your info was not saved." ;
}
?>
