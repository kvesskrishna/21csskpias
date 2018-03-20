<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function auth_admin()
	{
		if(!empty($_POST['username'])&&!empty($_POST['password']))
		{
			global $mysqli;
			$username=mysqli_real_escape_string($mysqli,$_POST["username"]);
			$password=mysqli_real_escape_string($mysqli,$_POST["password"]);
			$query="SELECT * FROM kpias_admins WHERE username='{$username}'";
			$result=$mysqli->query($query);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				if ($row['password']==$password) {
					# code...
				$response=array(
					'status' => 1,
					'status_message' =>'Login Success.',
					'profile' => array_diff_key($row,array_flip(array('password')))
				);
				}
				else
				$response=array(
					'status' => 0,
					'status_message' =>'Invalid Password.'
				);

			}
			else{
				$response=array(
					'status' => 0,
					'status_message' =>'Admin does not exist.'
				);

			}
		}
		else
			$response=array(
					'status' => 0,
					'status_message' =>'Email/Password Empty.'
				);			
			header('Content-Type: application/json');
			echo json_encode($response, JSON_UNESCAPED_SLASHES);

	}
//-----------------------
//HANDLE POST REQUEST END



switch ($verb) {
	case 'POST':
		auth_admin();
		break;
	default:
		http_response_code(405);
		break;
}

}
?>