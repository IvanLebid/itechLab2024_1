<?php
include "PDOConection.php";

$from = $_GET["from"];
$to = $_GET["to"];

$sql = "SELECT * FROM `literature` WHERE YEAR BETWEEN :from AND :to AND LITERATE IN ('Book', 'Journal', 'Newspaper')";

$stmt = $dbh -> prepare($sql);
$stmt -> bindValue(':from', $from, PDO::PARAM_STR);
$stmt -> bindValue(':to', $to, PDO::PARAM_STR);
try {
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
   
    include_once 'printTable.php';
    echo "</table>";
} catch (\Throwable $th) {
    echo "Error".$th;
}

