<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function update_gallery()
	{
		global $mysqli;
		$title = mysqli_real_escape_string($mysqli,$_POST['gallery_title']);
		$comment = mysqli_real_escape_string($mysqli,$_POST['gallery_comment']);
		$id=$_POST['gallery_id'];
		$status=$_POST['gallery_status'];
		$query = "UPDATE kpias_gallery SET gallery_title='{$title}', gallery_comment='{$comment}', gallery_status='{$status}', gallery_modified=now() WHERE gallery_id=$id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Gallery Updated Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Gallery Update Failed.',
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
		update_gallery();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>