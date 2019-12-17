<?php
require_once "autoload.php";
//var_dump($_POST);
//var_dump($_GET);

$tablename = $_POST["tablename"];
$formname = $_POST["formname"];
$afterinsert = $_POST["afterinsert"];
$pkey = $_POST["pkey"];

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
        if (ExecuteSQL($sql)) $new_url = "wdev_nicole/dag2/$formname.php?id=" . $_POST[$pkey] . "&updateOK=true";
    } else {
        print "Exercise not found.";
    }
    print $sql;
    header("Location: $new_url");
}

if ($_POST["deletebutton"] == "Delete") {
    try {
        $conn = GetConnection();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // sql to delete a record
        $sql = "DELETE FROM $tablename WHERE $pkey=" . $_POST[$pkey];

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Record deleted successfully";
        if (ExecuteSQL($sql)) $new_url = "wdev_nicole/dag2/$afterinsert?insertOK=true";

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
//    print $sql;
    header("Location: $new_url");

        ///
//        $sql = "DELETE FROM $tablename WHERE $pkey=" . $_GET[$pkey];
//        if (ExecuteSQL($sql)) $new_url = "wdev_nicole/dag2/$afterinsert?insertOK=true";

}


///////
//
//try {
//    $conn = GetConnection();
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // sql to delete a record
//    $sql = "DELETE FROM $tablename WHERE $pkey=" . $_GET[$pkey];
//
//    // use exec() because no results are returned
//    $conn->exec($sql);
//    echo "Record deleted successfully";
//    if (ExecuteSQL($sql)) $new_url = "wdev_nicole/dag2/$afterinsert?insertOK=true";
//
//} catch (PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;
