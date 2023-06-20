<?php
require_once '../conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $postData = file_get_contents('php://input');
    $jsonData = json_decode($postData, true);

    if (is_array($jsonData) && isset($jsonData['keywords'])) {
        $keywords = $jsonData['keywords'];

        $message_text= "http://localhost/ecom-ml/?";
        // Display the keywords
        foreach ($keywords as $keyword) {
            $message_text.= "keywords[]=". $keyword."&";            
        }
        // $query = "INSERT INTO your_table_name (column_name) VALUES ";
        $sql = "INSERT INTO messages (user_id, message_text, message_type ) VALUES ('0', '$message_text', 'u')";

        // Execute the query
          if ($conn->query($sql) === true) {

              $response = array('success' => true, 'message' =>  "Data inserted successfully.");
              echo json_encode($response);
              exit;
          } else {
              $errorsql=  "Error: " . $sql . "<br>" . $conn->error;
              $response = array('success' => false, 'message' => $errorsql);
              echo json_encode($response);
              exit;
          }

    }else{
        $response = array('success' => false, 'message' => 'No data received');
        echo json_encode($response);
        exit;
    }
}else{
    $response = array('success' => false, 'message' => 'Unsupported REQUEST_METHOD');
    echo json_encode($response);
    exit;
}
?>
