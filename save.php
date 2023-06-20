<?php
require_once 'conn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_FILES['audio']) && $_FILES['audio']['error'] === UPLOAD_ERR_OK) {
    $audioFile = $_FILES['audio'];
    $tmpPath = $audioFile['tmp_name'];
    $destPath = 'recordings/' . $audioFile['name'];

    if (!is_dir('recordings')) {
      mkdir('recordings', 0777, true);
    }

    if (move_uploaded_file($tmpPath, $destPath)) {


      // SQL query to insert data
      $sql = "INSERT INTO messages (user_id, message_text, message_type ) VALUES ('1', '$destPath', 'v')";

      // Execute the query
      if ($conn->query($sql) === true) {
          echo "Data inserted successfully.";

          // API endpoint
          $url = 'http://localhost/flask-endpoint';
          $data = json_encode(array(
            "audio" => array("http://localhost/ecom-ml/".$destPath )
          ));

          // Initialize cURL
          $ch = curl_init($url);

          // Set the request method to POST
          curl_setopt($ch, CURLOPT_POST, 1);

          // Set the POST data
          curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

          // Include the response headers in the output
          curl_setopt($ch, CURLOPT_HEADER, true);

          // Return the response instead of printing it
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

          // Execute the request
          $response = curl_exec($ch);

          // Close cURL resource
          curl_close($ch);

          // Output the response
          echo $response;




      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      echo 'Audio file saved successfully.';
    } else {
      echo 'Error moving audio file to destination. Please check directory permissions.';
    }
  } else {
    echo 'Error uploading audio file: ' . $_FILES['audio']['error'];
  }
}



?>


