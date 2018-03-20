<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function update_course()
	{
		global $mysqli;
		$id=$_POST['course_id'];
		$status=$_POST['course_status'];
		$title = mysqli_real_escape_string($mysqli,$_POST['course_title']);
		$description = mysqli_real_escape_string($mysqli,$_POST['course_description']);
		$duration = mysqli_real_escape_string($mysqli,$_POST['course_duration']);
		$eligibility = mysqli_real_escape_string($mysqli,$_POST['course_eligibility']);
		$category = mysqli_real_escape_string($mysqli,$_POST['course_category']);
		$thumbnail_path=$_POST['thumbnail_file_name'];
		if (!empty($_POST['thumbnail_file_data'])) {
			# code...
			unlink('../courses/'.substr($_POST['oldfile'], 48));
			$thumbnail_enfile = $_POST['thumbnail_file_data'];
		$thumbnail_defile = base64_decode($thumbnail_enfile);
		$thumbnail_file = "../courses/".time().$_POST['thumbnail_file_name'];
		$thumbnail_path = "http://www.kpias.com".substr($thumbnail_file, 2);
		file_put_contents($thumbnail_file, $thumbnail_defile);
		}


		$query = "UPDATE kpias_courses SET course_title='{$title}', course_description='{$description}', course_duration='{$duration}', course_status='{$status}', course_eligibility='{$eligibility}',course_category='{$category}',course_thumbnail='{$thumbnail_path}' WHERE course_id=$id";
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
		update_course();
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