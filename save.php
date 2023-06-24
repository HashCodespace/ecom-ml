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
          $url = 'http://127.0.0.1:5000/filter_categories';

          $audioPath = "http://localhost/ecom-ml/".$destPath;
          $encodedAudioPath = urlencode($audioPath);

          $endpointURL = $url."?audio=".$encodedAudioPath;

          $curl = curl_init();

          curl_setopt_array($curl, array(
            CURLOPT_URL => $endpointURL ,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
          ));

          $response = curl_exec($curl);

          curl_close($curl);
          $res=  $response;





      } else {
          $res= "Error: " . $sql . "<br>" . $conn->error;
      }

      $res= 'Audio file saved successfully.';
    } else {
      $res= 'Error moving audio file to destination. Please check directory permissions.';
    }
  } else {
    $res= 'Error uploading audio file: ' . $_FILES['audio']['error'];
  }

    $response = array('success' => false, 'message' =>$res);
    echo json_encode($response);
}



?>


