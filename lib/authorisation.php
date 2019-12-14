<?php
function CheckLogin( $email, $password )
{
    //gebruiker opzoeken ahv zijn login (e-mail)
    $sql = "SELECT * FROM users WHERE usr_email='" . $email . "' ";
    $data = GetData($sql);
    if ( count($data) == 1 )
    {
        $row = $data[0];
        //password controleren
        if ( password_verify( $password, $row['usr_password'] ) ) $login_ok = true;
    }

    if ( $login_ok )
    {
        session_start();
        $_SESSION['usr'] = $row;
        return true;
    }

    return false;
}
