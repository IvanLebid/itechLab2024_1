<?php
    include 'PDOConection.php';
    $publisher = $_GET["publisher"];
    
    $sql = "SELECT * FROM literature WHERE PUBLISHER = :publisher";

    $stmt = $dbh -> prepare($sql);
    $stmt->bindValue(':publisher', $publisher, PDO::PARAM_STR);
    try {
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       include_once 'printTable.php';
    } catch (\Throwable $th) {
        echo "Error".$th;
    }

?>