<?php
require_once "autoload.php";
var_dump($_POST);
var_dump($_GET);

$tablename = $_POST["tablename"];
$formname = $_POST["formname"];
$afterinsert = $_POST["afterinsert"];
$pkey = $_GET["pkey"];

if ($_POST["editbutton"] == "Edit") {
    $sql_body = array();

    //key-value pairs samenstellen
    foreach ($_POST as $field => $value) {
        if (in_array($field, array("tablename", "formname", "afterinsert", "pkey", "savebutton", $pkey))) continue;

        $sql_body[] = " $field = '" . htmlentities($value, ENT_QUOTES) . "' ";
    }

    if ($_POST[$pkey] > 0) //update
    {
        $sql = "UPDATE $tablename SET " . implode(", ", $sql_body) . " WHERE $pkey=" . $_POST[$pkey];
        if (ExecuteSQL($sql)) $new_url = "/dag2/$formname.php?id=" . $_POST[$pkey] . "&updateOK=true";
    } else {
        print "Exercise not found.";
    }
    print $sql;
    header("Location: $new_url");
}

if ($_POST["deletebutton"] == "Delete") {
    {
        $sql = "DELETE FROM $tablename WHERE $pkey=" . $_GET[$pkey];
        if (ExecuteSQL($sql)) $new_url = "/dag2/$afterinsert?insertOK=true";
    }

    print $sql;
    header("Location: $new_url");
}