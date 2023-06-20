<?php
$url = "http://localhost/ecom-ml/getdata.php";

// Extract keywords from the URL
$keywordArray = [];
parse_str(parse_url($url, PHP_URL_QUERY), $params);
if (isset($params['keywords'])) {
    $keywordArray = $params['keywords'];
}

// Create SQL query
$sql = "SELECT DISTINCT name, img, price FROM product WHERE keyword IN ('" . implode("', '", $keywordArray) . "');";

echo $sql;
?>