<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_video()
	{
		global $mysqli;
		$title = mysqli_real_escape_string($mysqli,$_POST['video_title']);
		$link = mysqli_real_escape_string($mysqli,$_POST['video_link']);
		$comment = mysqli_real_escape_string($mysqli,$_POST['video_comment']);
		$query = "INSERT INTO kpias_videos (video_title, video_link, video_comment) VALUES ('{$title}', '{$link}', '{$comment}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Video Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Video Adding Failed.',
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
function get_videos($video_id=0){
	global $mysqli;

		$query="SELECT * FROM kpias_videos";
		if($video_id != 0)
		{
			$query.=" WHERE video_id=".$video_id." LIMIT 1";
		}
		$result=$mysqli->query($query);
		while($row=$result->fetch_assoc())
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
}
//-----------------------
//HANDLE GET REQUEST END





switch ($verb) {
	case 'GET':
		if(!empty($_GET["video_id"]))
			{
				$video_id=intval($_GET["video_id"]);
				get_videos($video_id);
			}
			else
			{
				get_videos();
			}
		break;
	case 'POST':
		insert_video();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>