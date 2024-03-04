<?php
    include 'PDOConection.php';
    $publisher = $_GET["publisher"];
    echo "Publisher is ".$publisher."<br>";

    $sql = "SELECT * FROM literature WHERE PUBLISHER = :publisher";

    $stmt = $dbh -> prepare($sql);
    $stmt->bindValue(':publisher', $publisher, PDO::PARAM_STR);
    try {
        echo $sql;
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo count($result);
       include_once 'printTable.php';

    } catch (\Throwable $th) {
        //throw $th;
        echo "Error".$th;
    }

?>