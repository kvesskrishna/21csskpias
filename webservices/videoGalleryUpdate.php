<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function update_video()
	{
		global $mysqli;
		$title = mysqli_real_escape_string($mysqli,$_POST['video_title']);
		$link = mysqli_real_escape_string($mysqli,$_POST['video_link']);
		$comment = mysqli_real_escape_string($mysqli,$_POST['video_comment']);
		$id=$_POST['video_id'];
		$status=$_POST['video_status'];
		$query = "UPDATE kpias_videos SET video_title='{$title}', video_link='{$link}', video_comment='{$comment}', video_status='{$status}', video_modified=now() WHERE video_id=$id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Video Updated Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Video Update Failed.',
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





switch ($verb) {
	
	case 'POST':
		update_video();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>