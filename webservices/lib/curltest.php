<?php
$fields = array("name" => "Krishna", "age" => "31");
$fields_string=null;
//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');
//$data_string = json_encode($data);
$ch = curl_init('http://localhost:81/21cssindia/workspace/webservices/products');
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('21css-Api-Key: 160e64f13691a2f59d34492dc238f98e'));
$result = curl_exec($ch);
$res = json_decode($result,true);
echo $res['auth_status']."<br>";
echo $res['name']."<br>";
echo $res['age'];

?>