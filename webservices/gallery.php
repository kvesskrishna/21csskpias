<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_gallery()
	{
		global $mysqli;
		$title = mysqli_real_escape_string($mysqli,$_POST['gallery_title']);
		$comment = mysqli_real_escape_string($mysqli,$_POST['gallery_comment']);
		$query = "INSERT INTO kpias_gallery (gallery_title, gallery_comment) VALUES ('{$title}','{$comment}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Gallery Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Gallery Adding Failed.',
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
function get_gallery($gallery_id=0){
	global $mysqli;

		$query="SELECT * FROM kpias_gallery";
		if($gallery_id != 0)
		{
			$query.=" WHERE gallery_id=".$gallery_id." LIMIT 1";
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
		if(!empty($_GET["gallery_id"]))
			{
				$gallery_id=intval($_GET["gallery_id"]);
				get_gallery($gallery_id);
			}
			else
			{
				get_gallery();
			}
		break;
	case 'POST':
		insert_gallery();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>