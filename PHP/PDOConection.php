<?php
$pdoMysqlAvailable = extension_loaded('pdo_mysql');
    echo 'PDO MySQL Driver: ' . ($pdoMysqlAvailable ? 'Available' : 'Not Available') . PHP_EOL;
    $dsn = "mysql:host=localhost; dbname=lb_pdo_library";
    $username = "root"; $password = "";
    $options = array(PDO::ATTR_PERSISTENT => true, PDO::
MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
try {
$dbh = new PDO ($dsn, $username, $password, $options);
echo "Connected to database<br>";
//$dbh ->query("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
echo "Error!: " . $e->getMessage() . "<br/>"; die();
}
?>