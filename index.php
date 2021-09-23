<html>
<head>
<style>
body {background-color: coral;}
</style>
</head>
<body>
<?php

$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://bilety.legia.com/Stadium/GetWGLSectorsInfo?eventId=701');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:78.0) Gecko/20100101 Firefox/78.0 Waterfox/78.14.0');
$query = curl_exec($curl_handle);
curl_close($curl_handle);
echo $query;

?>

</body>