<?php
include 'PDOConection.php';
 $author = $_GET["author"];
 $sql = "SELECT literature.*, author.NAME AS author_name FROM `literature` JOIN author ON literature.ID = author.Id WHERE author.NAME = :author";
 $stmt = $dbh -> prepare($sql);
 $stmt -> bindValue(':author', $author, PDO::PARAM_STR);
 try {
    $stmt -> execute();
    $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    echo "<link rel='stylesheet' href='..\css\style.css'>";
    echo "<table>
    <thead>
    <tr>
    <th>Id</th>
    <th>NAME</th>
    <th>DAT</th>
    <th>YEAR</th>
    <th>PUBLISHER</th>
    <th>QUANTITY</th>
    <th>ISBN</th>
    <th>NUMBER</th>
    <th>LITERATE</th>
    <th>FID_RES</th>
    <th>Author Name</th>
    </tr>
    </thead>";
    foreach($result as $row){
        echo "
        <tbody>
        <tr>
        <td>{$row['Id']}</td>
        <td>{$row['NAME']}</td>
        <td>{$row['DAT']}</td>
        <td>{$row['YEAR']}</td>
        <td>{$row['PUBLISHER']}</td>
        <td>{$row['QUANTITY']}</td>
        <td>{$row['ISBN']}</td>
        <td>{$row['NUMBER']}</td>
        <td>{$row['LITERATE']}</td>
        <td>{$row['FID_RES']}</td>
        <td>{$row['author_name']}</td>
        </tr>
        </tbody>";
    }
    echo "</table>";
 } catch (\Throwable $th) {
   echo "Error".$th;
 }
?>