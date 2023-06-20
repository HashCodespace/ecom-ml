<?php
require_once 'conn.php';


?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="tailwind.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      setInterval(function() {
        $('#messageWrapper').load('message-sync.php');
      }, 1000);
    });
  </script>
</head>
<body>