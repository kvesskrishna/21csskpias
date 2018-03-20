<?php
require_once('dbconfig.php');

$response=array();

define('API_KEY', '160e64f13691a2f59d34492dc238f98e');

function getRequestHeaders() {
    $headers = array();
    foreach($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    return $headers;
}
$headers = getRequestHeaders();

//SET HEADER AS 21CSS-API-KEY and value as apikey in rest client or curlopt httpheader array

if(isset($headers['21css-Api-Key'])&&!empty($headers['21css-Api-Key']))
{
	$apikey = $headers['21css-Api-Key'];
	if ($apikey==API_KEY) {
		# code...
		$response['auth_status']=1;
	}
	else
	{
		$response['auth_status']=0;
		http_response_code(401);
	}
}
else
{
	$response['auth_status']=0;
	http_response_code(401);
}
?>