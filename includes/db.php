<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE calculator";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "calculator";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbName);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sqll = "CREATE TABLE multyply (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    factor1 INT(30) NOT NULL,
    factor2 INT(30) NOT NULL,
    operation VARCHAR(30) NOT NULL,
    result INT(30) NOT NULL,
    operation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($connection->query($sqll) === TRUE) {
        echo "Table Multyply created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

mysqli_close($connection);


