<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function update_currentaffair()
	{
		global $mysqli;
		$id=$_POST['ca_id'];
		$status=$_POST['ca_status'];
		$category=$_POST['category'];
		$description = mysqli_real_escape_string($mysqli,$_POST['ca_description']);
		$title = mysqli_real_escape_string($mysqli,$_POST['ca_title']);
		$file_path=$_POST['file_name'];
		if (!empty($_POST['file_data'])) {
			# code...
			unlink('../studentzone/'.substr($_POST['oldfile'], 48));
			$enfile = $_POST['file_data'];
		$defile = base64_decode($enfile);
		$file = "../studentzone/".time().$_POST['file_name'];
		$file_path = "http://www.kpias.com".substr($file, 2);
		file_put_contents($file, $defile);
		}


		$query = "UPDATE kpias_currentaffairs SET ca_title='{$title}', ca_description='{$description}', ca_status='{$status}', ca_file='{$file_path}', category='{$category}', ca_modified=now() WHERE ca_id=$id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Updated Successfully.',
				'registration_id'=>mysqli_insert_id($mysqli),
				'query'=>substr($thumbnail_path, 48)
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Updation Failed.',
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
		update_currentaffair();
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