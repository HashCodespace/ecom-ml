<?php
require_once '../conn.php';
// Retrieve the posted data
$data = $_POST;
print_r($_POST);
// Validate the data
if (empty($data)) {
    // If the data is empty, return an error response
    $response = array('success' => false, 'message' => 'No data received');
    echo json_encode($response);
    exit;
}




// $values = array();
// foreach ($data as $value) {
//     $value = $conn->real_escape_string($value);
//     $values[] = "('$value')";
// }


$values = array();
$message_text= "http://localhost/ecom-ml/?keywords=[";
foreach ($data as $value) {
    $message_text.= $value.",";
}
$response = array('success' => true, 'message' => $message_text);
//     echo json_encode($response);

// $query .= implode(", ", $values);

// // Execute the query
// if ($conn->query($query) === true) {
//     // If the data was inserted, return a success response
//     $response = array('success' => true, 'message' => 'Data inserted successfully');
//     echo json_encode($response);
// } else {
//     // If the data was not inserted, return an error response
//     $response = array('success' => false, 'message' => 'Failed to insert data');
//     echo json_encode($response);
// }

// Close the database connection
$conn->close();
?>
