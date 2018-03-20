<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function update_winner()
	{
		global $mysqli;
		$id=$_POST['winner_id'];
		$status=$_POST['winner_status'];
				$testimonial = mysqli_real_escape_string($mysqli,$_POST['winner_testimonial']);
$year=$_POST['winner_year'];
	$rank=$_POST['winner_rank'];
	$rollno=$_POST['winner_rollno'];
		$name = mysqli_real_escape_string($mysqli,$_POST['winner_name']);
		$course = mysqli_real_escape_string($mysqli,$_POST['winner_course']);
		$thumbnail_path=$_POST['thumbnail_file_name'];
		if (!empty($_POST['thumbnail_file_data'])) {
			# code...
			unlink('../winners/'.substr($_POST['oldfile'], 48));
			$thumbnail_enfile = $_POST['thumbnail_file_data'];
		$thumbnail_defile = base64_decode($thumbnail_enfile);
		$thumbnail_file = "../winners/".time().$_POST['thumbnail_file_name'];
		$thumbnail_path = "http://www.kpias.com".substr($thumbnail_file, 2);
		file_put_contents($thumbnail_file, $thumbnail_defile);
		}


		$query = "UPDATE kpias_winners SET winner_name='{$name}', winner_course='{$course}', winner_status='{$status}', winner_thumbnail='{$thumbnail_path}', winner_testimonial='{$testimonial}', winner_year='{$year}', winner_rank={$rank}, winner_rollno='{$rollno}', winner_modified=now() WHERE winner_id=$id";
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
		update_winner();
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