<?php
function GetData( $sql )
{
    $dsn = "mysql:host=localhost;dbname=getfit";
    $user = "root";
    $passwd = "dumpling6";

    $pdo = new PDO($dsn, $user, $passwd);

    $stm = $pdo->prepare($sql);
    $stm->execute();

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}