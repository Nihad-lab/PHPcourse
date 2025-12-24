<?php
// database.php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";
try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    echo "You are connected.";
} catch(mysqli_sql_exception) {
    echo "Could not connect.";
}
?>
-- Пример SQL-запроса, создаваемого phpMyAdmin
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(25) UNIQUE,
    password CHAR(255),
    register_date DATETIME DEFAULT CURRENT_TIMESTAMP
);

