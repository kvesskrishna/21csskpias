<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function update_content()
	{
		global $mysqli;
		$id=$_POST['content_id'];
		$status=$_POST['content_status'];
		$title = mysqli_real_escape_string($mysqli,$_POST['content_title']);
		$description = mysqli_real_escape_string($mysqli,$_POST['content_description']);
		$query = "UPDATE kpias_visionmission SET content_title='{$title}', content_description='{$description}', content_status='{$status}' WHERE content_id=$id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Updated Successfully.',
				'registration_id'=>mysqli_insert_id($mysqli)
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
	function get_content($content_id=0){
		global $mysqli;

		$query="SELECT * FROM kpias_visionmission";
		if($content_id != 0)
		{
			$query.=" WHERE content_id=".$content_id." LIMIT 1";
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
		update_content();
		break;
		
	case 'GET':
		if(!empty($_GET["content_id"]))
			{
				$content_id=intval($_GET["content_id"]);
				get_content($content_id);
			}
			else
			{
				get_content();
			}
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