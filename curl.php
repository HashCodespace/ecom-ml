<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:5000/filter_categories?audio=http%3Alocalhost%2Fwewew',
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
echo $response;


// http://127.0.0.1:5000/filter_categories?audio=http%3A%2F%2Flocalhost%2Fecom-ml%2Frecordings%2F1687592782705recording.wav