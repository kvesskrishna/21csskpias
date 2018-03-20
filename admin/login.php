<?php
session_start();
$message="";
if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['password'];
$fields = array("username" => $username, "password" => $password);
$fields_string=null;
//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');
//$data_string = json_encode($data);
$ch = curl_init('http://www.kpias.com/webservices/login?api_key=160e64f13691a2f59d34492dc238f98e');
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HTTPHEADER, array('21css-Api-Key: 160e64f13691a2f59d34492dc238f98e'));
$result = curl_exec($ch);
$res = json_decode($result,true);
if ($res['status']==1) {
	# code...
$_SESSION['profile'] = $res['profile'];
	header('Location: home');
}
else {
	$_SESSION['loginerror']=1;
	header('Location: signin');
}
//echo $username;
}
?>