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
