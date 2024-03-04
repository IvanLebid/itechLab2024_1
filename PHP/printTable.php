<?php
echo "<link rel='stylesheet' href='..\css\style.css'>";
echo "<table>
        <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>DAT</th>
        <th>YEAR</th>
        <th>PUBLISHER</th>
        <th>QUANTITY</th>
        <th>ISBN</th>
        <th>NUMBER</th>
        <th>LITERATE</th>
        <th>FID_RES</th>
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
            </tr>
            </tbody>";
        }
        echo "</table>";
        ?>