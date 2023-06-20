<?php

// Assuming you have a MySQL database connection
require_once '../conn.php';

// Fetch data from the database
$sql = "SELECT DISTINCT keyword FROM product";
$result = $conn->query($sql);

// Check if the query was successful
if ($result === false) {
    die("Query failed: " . $conn->error);
}

// Create an array to store the results
$data = array();

// Fetch each row and add it to the data array
while ($row = $result->fetch_assoc()) {
    $data[] = $row['keyword'];
}

// Encode the data as JSON
$jsonData = json_encode($data);

// Set the response headers
header('Content-Type: application/json');

// Send the JSON response
echo $jsonData;

// Close the database connection
$conn->close();
?>
