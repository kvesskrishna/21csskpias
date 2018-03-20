<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_content()
	{
		global $mysqli;
		$page = mysqli_real_escape_string($mysqli,$_POST['page']);
		$title = mysqli_real_escape_string($mysqli,$_POST['section_title']);
		$content = mysqli_real_escape_string($mysqli,$_POST['section_content']);
		$query = "INSERT INTO kpias_content (page, section_title, section_content) VALUES ('$page', '$title', '$content')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Added Successfully.',
				'registration_id'=>mysqli_insert_id($mysqli)
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Adding Failed.',
				'query' => $query,
				'error' => $mysqli->error
			);
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}
//-----------------------
//HANDLE POST REQUEST END


//HANDLE GET REQUEST START
//-----------------------
	
//-----------------------
//HANDLE GET REQUEST END





//HANDLE PUT REQUEST START
//-----------------------

//-----------------------
//HANDLE PUT REQUEST END


//HANDLE DELETE REQUEST START
//-----------------------

//-----------------------
//HANDLE DELETE REQUEST END

switch ($verb) {
	case 'POST':
		insert_content();
		break;
		
	
	
	/*
	case 'PUT':
		$registration_id=intval($_GET["registration_id"]);
		update_registration($registration_id);
		break;
	case 'DELETE':
		$registration_id=intval($_GET["registration_id"]);
		delete_registration($registration_id);
		break;
		*/
	default:
		http_response_code(405);
		break;
}

}
?>