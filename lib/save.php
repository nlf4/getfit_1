<?php
require_once "autoload.php";

if ( $_POST["savebutton"] == "Save" )
{
    $sql_body = array();

    foreach( $_POST as $field => $value )
    {
        if ( $field <> "exe_id" AND $field <> "savebutton" )
        {
            $sql_body[]  = " $field = '" . htmlentities($value, ENT_QUOTES) . "' " ;
        }
    }

    $sql .= "UPDATE exercises SET " . implode( ", " , $sql_body ) . " WHERE exe_id=" . $_POST["exe_id"];
    echo $sql;

    GetData($sql);
}
?>